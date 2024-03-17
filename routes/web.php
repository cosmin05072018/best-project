<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Signup;
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

Route::get('/login', [Login::class, 'loginForm'])->name('login');
Route::get('/signup', [Signup::class, 'signupForm'])->name('signup');

Route::post('/login', [Login::class, 'validateLoginForm'])->name('validateLoginForm');
Route::post('/signup', [Signup::class, 'validateSignupForm'])->name('validateSignupForm');
