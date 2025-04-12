<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/privacy-policy', function () {
    return view('pages.privacy');
})->name('privacy');


require __DIR__.'/auth.php';
require __DIR__.'/dashboard.php';