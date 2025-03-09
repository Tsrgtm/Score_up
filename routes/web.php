<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('components.layouts.dashboard');
})->name('dashboard');


require __DIR__.'/auth.php';