<?php

use App\Http\Controllers\mailController;
use App\Http\Controllers\uploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('send-mail',[mailController::class, 'sendEmail']);
Route::view('send-mail','send-mail');

                 