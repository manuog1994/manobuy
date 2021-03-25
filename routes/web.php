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
Route::get('/all', [AnnouncementController::class, 'view'])->name('announcements');
Route::post('/', [AnnouncementController::class, 'create'])->name('create');
Route::put('/', [AnnouncementController::class, 'update'])->name('update');
Route::delete('/', [AnnouncementController::class, 'delete'])->name('delete');