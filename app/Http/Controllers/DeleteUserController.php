<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\AnnouncementImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class DeleteUserController extends Controller
{
    public function deleteUser($id)
    {
        $announcements = Announcement::all();

        foreach ($announcements as $announcement){
            if ($announcement->user->id == $id)
                $images = AnnouncementImage::all();

                foreach ($images as $image) {
                    $fileName = basename($image);

                    if($image->id == $announcement->id)
                        File::delete(storage_path("app/public/announcements/$announcement->id/$fileName"));
                        $image->delete();
                }
        
                File::deleteDirectory(storage_path("app/public/announcements/$announcement->id"));

                //delete announcement user
                $user = Auth::user();
                if(!$user)
                    return back();

                if($user->id != $announcement->user_id)
                    return back();

                $announcement->delete();
                    
        }
                
        if(Auth::user())
            $user = Auth::user();
            $user->delete();

        return redirect('/')->with('deleteUser', 'Su perfil ha sido eliminado');

    }
}
