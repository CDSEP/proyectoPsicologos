<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('', [HomeController::class, 'index']);
Route::get('', [HomeController::class, 'settings']);
Route::get('', [HomeController::class, 'tyc']);
