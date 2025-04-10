<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Authentication;

Route::middleware('guest')->group(function () {
    Route::get('/login', function () { return view('auth.authentication'); })->name('login');
    Route::get('/register', function () { return view('auth.authentication'); })->name('register');
    Route::get('auth/{provider}/redirect', [Authentication::class, 'redirectToProvider'])->name('socialite.redirect');
    Route::get('auth/{provider}/callback', [Authentication::class, 'handleProviderCallback'])->name('socialite.callback');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', function () {
        auth()->logout();
        return redirect()->back();
    })->name('logout');
});
