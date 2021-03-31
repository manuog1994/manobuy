<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

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

        session()->push("images.{uniqueSecret}", $fileName);

        return response()->json(
            session("images.{uniqueSecret}")
        );
    }

}
