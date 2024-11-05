<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\DataController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/data', [DataController::class, 'index']);

