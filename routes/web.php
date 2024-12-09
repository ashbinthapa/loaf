<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\DataController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;





Route::get('/', [HomeController::class, 'index']);

Route::get('/data', [DataController::class, 'index']);

Route::get('/publication', [PublicationController::class, 'index']);

Route::get('/people', [PeopleController::class, 'index']);


Route::get('/gallery', [GalleryController::class, 'archive'])->name('gallery.archive');
Route::get('/gallery/{title}', [GalleryController::class, 'single'])->name('gallery.single');


Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/form', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact/form', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::get('/contact/thankyou', function () {
    return view('emails.thank-you'); // This should be the view for your thank you page
})->name('contact.thankyou');


Route::get('/{title}', [PageController::class, 'index']);
