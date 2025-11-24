<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('landing');
// })->name('landing');    

// ROUTE HALAMAN PUBLIK
Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/lowongan', [PageController::class, 'lowongan'])->name('lowongan');
Route::get('/program-kami', [PageController::class, 'program'])->name('program');
Route::get('/tentang-kami', [PageController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');

// ROUTE DEFAULT BREEZE
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ROUTE UNTUK USER LOGIN
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ROUTE AUTENTIKASI OTOMATIS (LOGIN, REGISTER, LOGOUT)
require __DIR__.'/auth.php';