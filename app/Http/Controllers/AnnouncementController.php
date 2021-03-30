<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    public function create(Request $request)
    {
        $request = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'img' => 'nullable',
            'category_id' => 'required',
        ]);
        //dd($request);
        $user = Auth::user();
        
        $category = Announcement::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'category_id' => $request['category_id'],
            'img' => $request['img'] = null, 
            'user_id' => Auth::id()
        ]);    

            return redirect('/')->with('created', 'Su anuncio a sido creado con éxito, en unos minutos nuestros revisores aceptaran o rechazaran su anuncio');
    }

     public function viewAnnouncement($id)
    {
        $category = Category::findOrFail($id);
        $announcements = $category->announcements()
                                    ->where('is_accepted', true)
                                    ->paginate(10);
        return view('/announcement', compact('category', 'announcements'));
    }

    public function viewDetail($id)
    {
        $detail = Announcement::findOrFail($id);

        return view('/detail', ["detail"=>$detail]);
    }


    
}
