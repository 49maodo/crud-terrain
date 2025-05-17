<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('terrain', \App\Http\Controllers\TerrainController::class);
