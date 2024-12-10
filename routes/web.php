<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmisiCarbonController;


Route::get('/', [DashboardController::class, 'index']);
Route::resource('emisicarbon', EmisiCarbonController::class);
Route::resource('dashboard', DashboardController::class);
Route::get('emisicarbon/{id}/edit', [EmisiCarbonController::class, 'edit'])->name('emisicarbon.edit');

