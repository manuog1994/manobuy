<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/announcements/new',[HomeController::class,'newAnnouncement'])->name('announcements.new');
Route::post('/announcements/create',[HomeController::class,'create'])->name('announcements.create');

Route::post('/announcement/images/upload', [HomeController::class, 'uploadImages'])->name('announcement.images.upload');
Route::delete('/announcement/images/remove', [HomeController::class, 'removeImages'])->name('announcement.images.remove');
Route::get('/announcement/images', [HomeController::class,'getImages'])->name('announcement.images');

Route::get('/announcements/{id}', [AnnouncementController::class, 'viewAnnouncement'])->name('announcements.category');
Route::get('/announcements/detail/{id}', [AnnouncementController::class, 'viewDetail'])->name('announcements.detail');

Route::get('/revisor', [RevisorController::class, 'index'])->name('revisor.home');
Route::post('/revisor/announcement/{id}/accept', [RevisorController::class, 'accept'])->name('revisor.announcement.accept');
Route::post('/revisor/announcement/{id}/reject', [RevisorController::class, 'reject'])->name('revisor.announcement.reject');


Route::post('/locale/{locale}', [HomeController::class, 'locale'])->name('locale');


Route::get('/search', [HomeController::class,'search'])->name('search');
