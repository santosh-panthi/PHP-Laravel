<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\DetailController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/detail',[DetailController::class,"getDetails"]);

