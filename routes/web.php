<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/music', function () {
    return view('musi');
});


Route::get('/daftar', function () {
    return view('daftar');
});

Route::post('/login', [LoginController::class, 'check'])->name('login.check');
Route::get('/logout', [LoginController::class, 'signOut'])->name('logout');
Route::post('/register', [LoginController::class, 'register'])->name('register');





