<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/app', function () {
        return view('app.dashboard');
    })->name('dashboard');

    Route::get('/app/profile', function () {
        return view('app.profile');
    })->name('profile');
});

