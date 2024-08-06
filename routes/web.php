<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('check')->group(function(){

    Route::view('home','home');
    Route::view('about','about');
});
