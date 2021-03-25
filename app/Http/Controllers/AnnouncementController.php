<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function create(Request $request)
    {
        $request = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
        ]);
        dd($request);
        Announcement::create($request);

        return redirect('create')->with('created', 'Su anuncio a sido creado');
    }

    public function view()
    {
        return view('/announcement');
    }
    public function viewAnnouncement($id)
    {
        $announcement = Announcement::findOrFail($id);

        return view('/announcement', ["announcement"=>$announcement]);
    }
    
}
