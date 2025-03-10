<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('components.layouts.dashboard');
    })->name('dashboard');
});