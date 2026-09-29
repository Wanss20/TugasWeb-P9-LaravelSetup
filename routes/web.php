<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes - Tugas Rutin 9: Setup Laravel
| Mahasiswa: M Daffa Dzakwan (NIM: 4251250015)
| Dosen Pengampu: Adidtya Perdana, ST., M.KOM
|--------------------------------------------------------------------------
*/

// Halaman Dashboard Utama (Route '/')
Route::get('/', [MainController::class, 'index'])->name('home');

// Halaman Sistem Info (Route '/about')
Route::get('/about', [MainController::class, 'about'])->name('about');

// Halaman Kontak Ops (Route '/contact')
Route::get('/contact', [MainController::class, 'contact'])->name('contact');

// Bonus: Route Parameter Dinamis (Route '/hello/{nama}')
Route::get('/hello/{nama}', [MainController::class, 'hello'])->name('hello');

// Welcome Page bawaan Laravel (memudahkan pengujian & screenshot welcome page)
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
