<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        
        $announcement = Announcement::findOrFail($id);
        
        if($user->id != $announcement->user_id)
            return redirect('/')->with('nousercreator', 'No puede modificar este anuncio');
        
        $announcement->name = $request['name'];
        $announcement->description = $request['description'];
        $announcement->price = $request['price'];
        $announcement->category_id = $request['category_id'];
        $announcement->save();
        
        
        return redirect(route('announcements.detail', $announcement->id))->with('modification', 'Su anuncio se ha modificado con éxito.');
    }

    public function deleteAnnouncement($id){

        $user = Auth::user();
        if(!$user)
            return back();
        
        $announcement = Announcement::findOrFail($id);

        if($user->id != $announcement->user_id)
            return back;

        $announcement->delete();

        return redirect('/')->with('deleteAnnouncement', 'Su anuncio ha sido borrado con éxito');
    }
}
