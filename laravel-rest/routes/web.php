<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongsController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/songs', SongsController::class);