<?php

use Illuminate\Support\Facades\Route;

Route::get('/salam', function () {
    return view('welcome');
});
