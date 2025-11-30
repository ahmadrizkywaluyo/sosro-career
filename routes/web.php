<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\Auth\AdminAuthController;

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

// ROUTE USER LOGIN (BREEZE)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// LOGIN ADMIN
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])
    ->name('admin.login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.submit');

// ADMIN DASHBOARD (HANYA ADMIN)
Route::middleware('auth:admin')->group(function () {

    Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
        ->name('admin.logout');
});

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    require __DIR__.'/admin.php';
});

require __DIR__.'/auth.php';