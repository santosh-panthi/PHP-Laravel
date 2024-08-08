<?php

use App\Http\Controllers\uploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/upload','upload');
Route::post('/upload', [uploadController::class,'upload']);
Route::get('/list', [uploadController::class,'list']);


