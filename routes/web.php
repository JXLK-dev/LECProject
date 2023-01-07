<?php

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/home', [App\Http\Controllers\LoginController::class, 'home'])->name('home');

Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::post('/login1', [App\Http\Controllers\LoginController::class, 'login1'])->name('login1');

Route::post('/register1', [App\Http\Controllers\LoginController::class, 'register1'])->name('register1');


