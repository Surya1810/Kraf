<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactController;
use App\Mail\ContactMail;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/check', function () {
    return view('pages.landing');
})->name('home');

// Route::get('/', function () {
//     return view('pages.maintanance');
// });

// Contact Us
Route::post('/send', [ContactController::class, 'send'])->name('send.email');
