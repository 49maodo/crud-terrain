<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/terrain');
});

Route::resource('terrain', \App\Http\Controllers\TerrainController::class);
