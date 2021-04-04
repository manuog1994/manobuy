<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\AnnouncementImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

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
        $fileName = $request->file('file')->store("public/temp/{$uniqueSecret}");

        session()->push("images.{$uniqueSecret}", $fileName);

        return response()->json(
            [
                'id' => $fileName
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

            $i->file = $newFilePath;
            $i->announcement_id = $category->id;
            $i->save();
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
                'name' => basename($image),
                'src' => Storage::url($image),
                'size'=> Storage::size($image)
            ];
        }
        return response()->json($data);
    }
     
}
