<?php

namespace App\Models;

use App\Models\Announcement;
use App\Models\AnnouncementImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AnnouncementImage extends Model
{
    use HasFactory;

    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }

    static public function getUrlByFilePath($filePath, $w = null, $h = null)
    {
        if(!$w && !$h)
            return Storage::url($filePath);

        $path = dirname($filePath);
        $fileName = basename($filePath);
        $file = "{$path}/crop{$w}x{$h}_{$fileName}";

        return Storage::url($file);
    }

    public function getUrl($w, $h)
    {
        return AnnouncementImage::getUrlByFilePath($this->file, $w, $h);
    }
}
