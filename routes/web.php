<?php

use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\PhotosController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});


// Path: routes\web.php

Route::get('/albums', [AlbumsController::class, 'index']);
Route::get('/albums/create', [AlbumsController::class, 'create'])->name('albums.create');
Route::get('/albums/{album}', [AlbumsController::class, 'show'])->name('albums.show');
Route::post('/albums', [AlbumsController::class, 'store'])->name('albums.store');
Route::delete('/albums/{id}', [AlbumsController::class, 'destroy'])->name('albums.destroy');


Route::get('/photo/upload/{album_id}', [PhotosController::class, 'create'])->name('photos.create');
Route::post('/photo/upload', [PhotosController::class, 'store'])->name('photos.store');
Route::get('/photo/{photo}', [PhotosController::class, 'show'])->name('photos.show');
Route::delete('/photo/{id}', [PhotosController::class, 'destroy'])->name('photos.destroy');
