<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;

// Redirect root URL to the register route
Route::get('/', function () {
    return redirect()->route('register');
});

// Authentication routes
Auth::routes();

// Home route for authenticated users
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Protect article routes with authentication middleware
Route::resource('articles', ArticleController::class)->middleware('auth');
