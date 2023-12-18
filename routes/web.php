<?php

use App\Http\Controllers\Backend\AlbumController;
use App\Http\Controllers\Backend\PhotoController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use PhpParser\Parser\Multiple;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // single image upload start
    Route::get('/single/image', [DashboardController::class, 'singleimge'])->name('single.image');
    Route::post('/single/image/upload', [DashboardController::class, 'singleimageupload'])->name('single.image.upload');
    // single image upload end

    // multiple image upload start
    Route::get('/multiple/image', [DashboardController::class, 'multipleimge'])->name('multiple.image');
    Route::post('/multiple/image/upload', [DashboardController::class, 'multipleimageupload'])->name('multiple.image.upload');
    // Multiple image upload end

    //gallery app start

    //album start
    Route::get('/albums', [AlbumController::class, 'index'])->name('album.index');
    Route::get('/album/create', [AlbumController::class, 'albumcreate'])->name('album.create');
    Route::post('/create/store', [AlbumController::class, 'create_store'])->name('create.store');
    Route::get('/show/{id}', [AlbumController::class, 'show'])->name('show');
    Route::delete('/delete/image/{id}', [AlbumController::class, 'delete_image'])->name('delete.image');
    //galleryapp end

    //photo route start
    Route::get('/photo/create', [PhotoController::class, 'index'])->name('photo.create');
    Route::post('/photo/store', [PhotoController::class, 'photo_store'])->name('photo.store');
});