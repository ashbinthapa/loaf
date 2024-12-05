<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\DataController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PageController;




Route::get('/', [HomeController::class, 'index']);

Route::get('/data', [DataController::class, 'index']);

Route::get('/publication', [PublicationController::class, 'index']);

Route::get('/people', [PeopleController::class, 'index']);

Route::get('/{title}', [PageController::class, 'index']);

Route::get('/gallery');
