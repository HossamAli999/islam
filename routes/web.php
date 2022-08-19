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
Route::get('listen', [App\Http\Controllers\pagesController::class, 'listen'])->name('listen');


// for newsletter subscription form
Route::post('newsletter', [App\Http\Controllers\NewsletterController::class, 'newsletter'])->name('newsletter');




Route::fallback(function(){
    return view("404/404");
});