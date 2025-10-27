<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use App\Http\Livewire\Auth\Login; // Tidak diperlukan lagi di sini
// use App\Http\Livewire\Auth\Register; // Tidak diperlukan lagi di sini

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// == RUTE PUBLIK ==
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about.about');
})->name('about');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');


// == RUTE KHUSUS TAMU (GUEST) ==
// Rute-rute ini hanya dapat diakses oleh pengguna yang BELUM login.
Route::middleware('guest')->group(function () {
    
    // PERBAIKAN DI SINI:
    // Kita panggil view-nya secara manual menggunakan Closure
    // Ini adalah cara paling aman untuk merender komponen Livewire full-page
    
    Route::get('/login', function () {
        // Asumsi file ada di: resources/views/livewire/auth/login.blade.php
        return view('livewire.auth.login'); 
    })->name('login');

    Route::get('/register', function () {
        // Asumsi file ada di: resources/views/livewire/auth/register.blade.php
        return view('livewire.auth.register');
    })->name('register');
});


// == RUTE OTENTIKASI (AUTH) ==
// Rute-rute ini hanya dapat diakses oleh pengguna yang SUDAH login.
Route::middleware('auth')->group(function () {
    
    // Halaman dashboard setelah login
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    // Proses Logout
    Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        // Arahkan ke halaman utama setelah logout
        return redirect('/'); 
    })->name('logout');
});