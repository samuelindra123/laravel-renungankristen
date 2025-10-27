<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\ResetPassword;
use Illuminate\Support\Facades\Auth;

// ===================================
// RUTE PUBLIK (Bisa diakses siapa saja)
// ===================================

// Mengarahkan halaman utama (root) ke view 'home'
// Asumsi kamu punya file resources/views/home.blade.php
Route::get('/', function () {
    return view('welcome'); 
})->name('home');

// Rute publik lainnya
Route::get('/about', function () {
    return view('about.about'); // Asumsi kamu punya file resources/views/about.blade.php
})->name('about');

Route::get('/contact', function () {
    return view('contact.contact'); // Asumsi kamu punya file resources/views/contact.blade.php
})->name('contact');


// ==================================================
// RUTE TAMU (Hanya untuk yang BELUM login)
// ==================================================
Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
    Route::get('/forgot-password', ForgotPassword::class)->name('password.request');
    Route::get('/reset-password/{token}', ResetPassword::class)->name('password.reset');
});


// ==================================================
// RUTE OTENTIKASI (Hanya untuk yang SUDAH login)
// ==================================================
Route::middleware('auth')->group(function () {
    
    // PERBAIKAN: Rute dashboard yang benar
    Route::get('/dashboard', function () {
        return view('dashboard'); // Asumsi kamu punya file resources/views/dashboard.blade.php
    })->name('dashboard');
    
    // PERBAIKAN: Rute logout yang terpisah dan benar (menggunakan POST)
    Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        // Arahkan ke halaman utama (home) setelah logout
        return redirect('/'); 
    })->name('logout');
});