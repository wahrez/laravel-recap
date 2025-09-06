<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home');

//Route::controller(\App\Http\Controllers\JobController::class)->group(function () {
//    Route::get('/jobs', 'index');
//    Route::get('/job/create', 'create');
//    Route::get('/job/{job}/show', 'show');
//    Route::post('/job', 'store');
//    Route::get('/job/{job}/edit', 'edit');
//    Route::patch('/job/{job}/', 'update');
//    Route::delete('/job/{job}', 'destroy');
//});

Route::resource('jobs', \App\Http\Controllers\JobController::class);

Route::view('/about', 'about');
Route::view('/contact', 'contact');
