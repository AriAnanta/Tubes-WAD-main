<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmisiCarbonController;


Route::get('/', [DashboardController::class, 'index']);
Route::resource('emisicarbon', EmisiCarbonController::class);

