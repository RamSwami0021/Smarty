<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\contactController as AdminContactController;
use App\Http\Controllers\Admin\galleryController as AdminGalleryController;
use App\Http\Controllers\Admin\noticeboardController;
use App\Http\Controllers\Website\aboutController;
use App\Http\Controllers\Website\contactController;
use App\Http\Controllers\Website\galleryController;

Route::get('/', [aboutController::class, 'index'])->name('index');
Route::get('gallery', [galleryController::class, 'index'])->name('gallery');
Route::get('contact', [contactController::class, 'index'])->name('contact');
Route::post('contact', [contactController::class, 'store'])->name('contact.store');

// Route::resource('contact', contactController::class);

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('login', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminController::class, 'login']);

    Route::middleware(['admin'])->group(function () {

        Route::get('welcome', [AdminController::class, 'index'])->name('welcome');
        Route::post('logout', [AdminController::class, 'logout'])->name('logout');

        Route::resource('noticeboard', noticeboardController::class);
        Route::resource('gallery', AdminGalleryController::class);
        Route::resource('contact', AdminContactController::class);
    });
});


