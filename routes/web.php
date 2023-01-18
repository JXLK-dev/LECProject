<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReminderDataController;
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

Route::get('/', [PageController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login1', [LoginController::class, 'login1'])->name('login1');
Route::post('/register1', [LoginController::class, 'register1'])->name('register1');
Route::get('/login', [PageController::class, 'login']);
Route::get('/register', [PageController::class, 'register']);
Route::group(
    ['middleware' => ['authentication']],
    function () {
        Route::get('/home', [PageController::class, 'home'])->name('home');
        Route::get('/detail/{reminder_id}', [PageController::class, 'detail']);
        Route::get('/add', [PageController::class, 'add']);
        Route::post('/add', [ReminderDataController::class, 'addReminder']);
        Route::get('/delete/{reminder_id}', [ReminderDataController::class, 'deleteReminder']);
        Route::post('/update/{reminder_id}', [ReminderDataController::class, 'updateReminder']);
        Route::get('/editprofile', [PageController::class, 'editprofile']);
        Route::post('/editprofile', [LoginController::class, 'updateProfile']);
        Route::get('/editpassword', [PageController::class, 'editpassword']);
        Route::post('/editpassword', [LoginController::class, 'updatePassword']);
        Route::post('/check', [ReminderDataController::class, 'checkReminder']);
    }
);
