<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/home', function () {
    return view('dashboard');
})->name('home')
    ->middleware('auth')
;

// Login Page
Route::get('/login',[UserController::class,'login_page'])
        // ->middleware('auth')
        ->name('login_page');

// Login
Route::post('/login',[UserController::class,'login'])
        // ->middleware('auth')
        ->name('login');

// Register
Route::get('/register_page',[UserController::class,'register_page'])
        // ->middleware('auth')
        ->name('register_page');

// register
Route::post('/register',[UserController::class,'register'])
    // ->middleware('auth')
    ->name('register');

// Logout
Route::post('/logout',[UserController::class,'logout'])
    // ->middleware('auth')
    ->name('logout');

