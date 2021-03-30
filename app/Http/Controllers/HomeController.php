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
}
