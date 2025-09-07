<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;


Route::view('/', 'home');
Route::resource('jobs', JobController::class);
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store'])->name('store');

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store'])->name('store');
Route::post('/logout', [SessionController::class, 'destroy'])->name('destroy');
