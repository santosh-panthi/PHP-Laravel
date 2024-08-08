<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\add_studentController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('add','add-data');
Route::post('add',[add_studentController::class,'add']);
Route::get('list',[add_studentController::class,'list']);
Route::get('delete/{id}',[add_studentController::class,'delete']);
Route::get('/edit/{id}',[add_studentController::class,'edit']);
Route::put('/edit/{id}',[add_studentController::class,'update']);
Route::get('/search',[add_studentController::class,'search']);
