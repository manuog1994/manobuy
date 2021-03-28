<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/announcements', [AnnouncementController::class, 'view'])->name('announcements');
Route::get('/announcements/{id}', [AnnouncementController::class, 'viewAnnouncement'])->name('announcements.category');
Route::get('/announcements/detail/{id}', [AnnouncementController::class, 'viewDetail'])->name('announcements.detail');
Route::post('/', [AnnouncementController::class, 'create'])->name('create');
Route::put('/', [AnnouncementController::class, 'update'])->name('update');
Route::delete('/', [AnnouncementController::class, 'delete'])->name('delete');