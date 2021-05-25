<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\Frontend\pages\AboutController;
use App\Http\Controllers\Frontend\pages\ContactController;
use App\Http\Controllers\Frontend\pages\GalleryController;
use App\Http\Controllers\Frontend\pages\HomeController;
use App\Http\Controllers\Frontend\pages\LandingController;
use App\Http\Controllers\Frontend\pages\SocialController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;

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

Route::get('/', function(){ return view('home');})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');
// 1st method of applying a middleware
// Route::get('/dashboard', [DashboardController::class, 'index'])
//     ->name('dashboard')
//     ->middleware('auth');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


// POST

// Route::post('/posts/{id}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
Route::delete('/posts/{post}/likes', [PostLikeController::class, 'delete'])->name('posts.likes');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/posts', [PostController::class, 'store']);
// Route::get('/posts', function () {
//     return view('posts.index');
// });

// frontend pages
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about',[AboutController::class, 'index'])->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/landing', [LandingController::class, 'index'])->name('landing');

Route::get('/social', [SocialController::class, 'index'])->name('social');
