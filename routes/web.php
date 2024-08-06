<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;
use App\Http\Middleware\Agecheck;
use App\Http\Middleware\Countrycheck;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware('check')->group(function(){

//     Route::view('home','home');
//     Route::view('about','about');
// });

Route::view('home','home')->middleware(Agecheck::class);
Route::view('about','about')->middleware(Countrycheck::class);
Route::view('user','user')->middleware([Countrycheck::class,Agecheck::class]);
Route::view('profile','profile');