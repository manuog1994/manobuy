<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\AnnouncementImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

class AnnouncementController extends Controller
{
     public function viewAnnouncement($id)
    {
        $category = Category::findOrFail($id);
        $announcements = $category->announcements()
                                    ->where('is_accepted', true)
                                    ->paginate(10);
        return view('announcement', compact('category', 'announcements'));
    }

    public function viewDetail($id)
    {
        $detail = Announcement::findOrFail($id);

        return view('announcements.detail', ["detail"=>$detail]);
    }





}
