<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactController;
use App\Mail\ContactMail;
use App\Models\Blog;

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

Route::get('/', function () {
    $blogs = Blog::where('status', 1)->where('deleted_at', NULL)->take(4)->get();
    // dd($blogs[1]->slug);
    return view('pages.landing', compact('blogs'));
})->name('home');

// Blog
Route::resource('blog', BlogController::class);
Route::get('/post/{slug}', [BlogController::class, 'post'])->name('blog.post');


// Maintanance
Route::get('/maintanance', function () {
    return view('pages.maintanance');
});

// Contact Us
// Route::post('/send', [ContactController::class, 'send'])->name('send.email');
