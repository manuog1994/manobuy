<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\AnnouncementImage;
use Illuminate\Support\Facades\Bus;
use App\Jobs\GoogleVisionLabelImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use App\Jobs\GoogleVisionRemoveFaces;
use Illuminate\Support\Facades\Storage;
use App\Jobs\GoogleVisionSafeSearchImage;

class HomeController extends Controller
{
    

    public function index()
    {
        $announcements = Announcement::where('is_accepted', true)->get();
        
        return view('home', compact('announcements'));
    }

    public function locale($locale)
    {
        session()->put('locale', $locale);
        return back();
    }

    public function uploadImages(Request $request)
    {
        $uniqueSecret = $request->input('uniqueSecret');
        $filePath = $request->file('file')->store("public/temp/{$uniqueSecret}");

        dispatch(new ResizeImage($filePath,120,120));

        session()->push("images.{$uniqueSecret}", $filePath);

        return response()->json(
            [
                'id' => $filePath
            ]
        );
    }

    public function removeImages(Request $request)
    {
        $uniqueSecret = $request->input('uniqueSecret');
        $fileName = $request->input('id');
        session()->push("removedImages.{$uniqueSecret}", $fileName);
        Storage::delete($fileName);
        return response()->json('ok');
    }

    public function newAnnouncement(Request $request)
    {
        $uniqueSecret = $request->old(
            'uniqueSecret',
            base_convert(sha1(uniqid(mt_rand())),16, 36)
        );

        return view('announcements.new', compact('uniqueSecret'));
    }

    public function create(Request $request)
    {
        
        $request = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'img' => 'nullable',
            'category_id' => 'required',
        ]);
            
        $user = Auth::user();
            
            
        $category = Announcement::create([
                'name' => $request['name'],
                'description' => $request['description'],
                'price' => $request['price'],
                'category_id' => $request['category_id'],
                'img' => $request['img'] = null, 
                'user_id' => Auth::id()
        ]);
                
        $uniqueSecret = request()->input('uniqueSecret');

        $images = session()->get("images.{$uniqueSecret}", []);
        $removedImages = session()->get("removedImages.{$uniqueSecret}", []);

        $images = array_diff($images, $removedImages);
                
        foreach ($images as $image) {
            $i = new AnnouncementImage;

            $fileName = basename($image);
            $newFilePath = "public/announcements/{$category->id}/{$fileName}";
            Storage::move($image, $newFilePath);

            dispatch(new ResizeImage(
                $newFilePath,
                300,
                150
            ));
            dispatch(new ResizeImage(
                $newFilePath,
                500,
                250
            ));
            dispatch(new ResizeImage(
                $newFilePath,
                800,
                500
            ));

            $i->file = $newFilePath;
            $i->announcement_id = $category->id;
            $i->save();
            Bus::chain([
                new GoogleVisionSafeSearchImage($i->id),
                new GoogleVisionLabelImage($i->id),
                new GoogleVisionRemoveFaces($i->id),
                new ResizeImage($i->file, 300,150),
                new ResizeImage($i->file, 500,250),
                new ResizeImage($i->file, 800,500),
            ])->dispatch();
        }

        File::deleteDirectory(storage_path("app/public/temp/{$uniqueSecret}"));
        

        return redirect('/')->with('created', 'Su anuncio a sido creado con éxito, en unos minutos nuestros revisores aceptaran o rechazaran su anuncio');
    }

    public function getImages(Request $request)
    {
        $uniqueSecret = $request->input('uniqueSecret');

        $images = session()->get("images.{$uniqueSecret}", []);
        $removedImages = session()->get("removedImages.{$uniqueSecret}", []);

        $images = array_diff($images, $removedImages);

        $data = [];

        foreach ($images as $image) {
            $data[] = [
                'id' => $image,
                'src' => AnnouncementImage::getUrlByFilePath($image, 120, 120),
                'name' => basename($image),
                'size'=> Storage::size($image)
            ];
        }
        return response()->json($data);
    }



    public function search(Request $request)
    {
        $q = $request->input('q');
        $announcements = Announcement::search($q)
            ->where('is_accepted', true)
            ->get();
        return view('search_results', compact('q', 'announcements'));
    } 

    public function userProfile($userId)
    {
        $user = Auth::user($userId);

        if(!$user)
            return back()->with('errorLogin', 'No has iniciado sesión, inicia sesión y vuelve a la página.');
            

        return view('profile', compact('user'));
    }
     
}
