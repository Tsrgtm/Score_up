<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/dashboard', function () {
    return view('components.layouts.dashboard');
})->name('dashboard');


require __DIR__.'/auth.php';
require __DIR__.'/dashboard.php';