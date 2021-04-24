<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UserVerificationController;

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
Route::get('/profile/{userId}', [HomeController::class, 'userProfile'])->middleware('verified')->name('profile');

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

Route::get('/forgot-password', [ResetPasswordController::class, 'forgotView'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [ResetPasswordController::class, 'forgotLink'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'resetView'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'validationPass'])->middleware('guest')->name('password.update');

Route::get('/email/verify', [UserVerificationController::class, 'verifyView'])->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [UserVerificationController::class, 'verifyRedirect'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/verification-notification', [UserVerificationController::class, 'reVerify'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/auth/redirect', [SocialiteController::class, 'redirectSocialite']);
Route::get('/auth/callback', [SocialiteController::class, 'callbackSocialite']);

Route::get('/auth/redirect-facebook', [SocialiteController::class, 'redirectFacebook']);
Route::get('/auth/callback-facebook', [SocialiteController::class, 'callbackFacebook']);

