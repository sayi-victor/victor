<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about.me');

Route::get('/skills', function () {
    return view('skills');
})->name('my.skills');

Route::get('login', function () {
    abort(404);
});

Route::controller(MessageController::class)->group(function(){
   Route::get('/contact-me', 'sendView')->name('contact.me');
   Route::post('/contact-me', 'send')->name('message.send');
});


