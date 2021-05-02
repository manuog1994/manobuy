<?php

namespace App\Http\Controllers;

use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\AnnouncementImage;
use Illuminate\Support\Facades\Bus;
use App\Jobs\GoogleVisionLabelImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Jobs\GoogleVisionRemoveFaces;
use Illuminate\Support\Facades\Storage;
use App\Jobs\GoogleVisionSafeSearchImage;

class ModifAnnouncementsController extends Controller
{   
    public function updateAnnouncementView(Request $request, $id)         
    {
        $announcement = Announcement::findOrFail($id);

        $uniqueSecret = $request->old(
            'uniqueSecret',
            base_convert(sha1(uniqid(mt_rand())),16, 36)
        );

        return view('announcements.updateview', compact('announcement', 'uniqueSecret'));
    }
    public function updateAnnouncement(Request $request, $id)
    {
        
        $request = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);
            
        $user = Auth::user();
        
        if(!Auth::user())
            return redirect()->with('errorlogin', 'Para modificar el anuncio, antes debe iniciar sesión');
        
        $announcement = Announcement::findOrFail($id);
        
        if($user->id != $announcement->user_id)
            return redirect('/')->with('nousercreator', 'No puede modificar este anuncio');
        
        $announcement->name = $request['name'];
        $announcement->description = $request['description'];
        $announcement->price = $request['price'];
        $announcement->category_id = $request['category_id'];
        $announcement->save();

        $uniqueSecret = request()->input('uniqueSecret');

        $images = session()->get("images.{$uniqueSecret}", []);
        $removedImages = session()->get("removedImages.{$uniqueSecret}", []);

        $images = array_diff($images, $removedImages);
                
        foreach ($images as $image) {
            $i = new AnnouncementImage;

            $fileName = basename($image);
            $newFilePath = "public/announcements/{$announcement->id}/{$fileName}";
            Storage::move($image, $newFilePath);

            dispatch(new ResizeImage(
                $newFilePath,
                300,
                300
            ));
            dispatch(new ResizeImage(
                $newFilePath,
                500,
                500
            ));
            dispatch(new ResizeImage(
                $newFilePath,
                800,
                500
            ));

            $i->file = $newFilePath;
            $i->announcement_id = $announcement->id;
            $i->save();
            Bus::chain([
                new GoogleVisionSafeSearchImage($i->id),
                new GoogleVisionLabelImage($i->id),
                new GoogleVisionRemoveFaces($i->id),
                new ResizeImage($i->file, 300,300),
                new ResizeImage($i->file, 500,500),
                new ResizeImage($i->file, 800,500),
            ])->dispatch();
        }

        File::deleteDirectory(storage_path("app/public/temp/{$uniqueSecret}"));
        
        
        return redirect(route('announcements.detail', $announcement->id))
            ->with('modification', 'Su anuncio se ha modificado con éxito.');   
    }

    public function deleteAnnouncement($id){
        
        $announcement = Announcement::findOrFail($id);
        //remove images
        $images = AnnouncementImage::all();

        foreach ($images as $image) {
            $fileName = basename($image);
            if($image->id == $announcement->id)
                File::delete(storage_path("app/public/announcements/$announcement->id/$fileName"));
                $image->delete();

            # code...
        }
        
        File::deleteDirectory(storage_path("app/public/announcements/$announcement->id"));

        //delete announcement user
        $user = Auth::user();
        if(!$user)
            return back();

        if($user->id != $announcement->user_id)
            return back();

        $announcement->delete();
            
        
        return redirect('/')->with('deleteAnnouncement', 'Su anuncio ha sido borrado con éxito');
    }

    public function removeImages(Request $request, $announcementid, $imageid)
    {   
        $announcement = Announcement::find($announcementid);
        $image = AnnouncementImage::find($imageid);
        
        File::delete(public_path("storage/announcements/$announcement/$image"));

        if($image)
            $image->delete();


        return back()->with('imageDelete', 'Tu imagen ha sido eliminada');
    }
}
