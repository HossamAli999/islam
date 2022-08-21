<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect('/start');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('reference', [App\Http\Controllers\pagesController::class, 'reference'])->name('reference');
Route::get('start', [App\Http\Controllers\pagesController::class, 'start'])->name('start');
Route::get('contact', [App\Http\Controllers\pagesController::class, 'contact'])->name('contact');

// for listing 
Route::get('listen', [App\Http\Controllers\pagesController::class, 'listen'])->name('listen');


// for newsletter subscription form
Route::post('newsletter', [App\Http\Controllers\NewsletterController::class, 'newsletter'])->name('newsletter');

// for contact form
Route::post('contact-us', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.us.store');

// for quran pdf
Route::get('quran-pdf', [App\Http\Controllers\pagesController::class, 'quran_pdf'])->name('quran-pdf');


Route::fallback(function(){
    return view("404/404");
});