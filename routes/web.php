<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\ProfileController;

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
Route::post('/store-playlist', [PlaylistController::class, 'store'])->name('store.playlist');

Route::get('/create-playlist', [PlaylistController::class, 'create'])->name('create.playlist');

Route::get('/playlists', [PlaylistController::class, 'index'])->name('playlists.index');

Route::get('/playmusic', function () {
    return view('playmusic');
});

Route::get('/music', function () {
    return view('music');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/musictime', function () {
    return view('musictime');
});

Route::post('/login', [LoginController::class, 'check'])->name('login.check');
Route::get('/logout', [LoginController::class, 'signOut'])->name('logout');
Route::post('/register', [LoginController::class, 'register'])->name('register');





