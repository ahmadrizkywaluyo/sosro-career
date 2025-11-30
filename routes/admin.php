<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Admin\ApplicantController;

Route::middleware(['auth:admin'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    Route::get('/jobs', [JobController::class, 'index'])
        ->name('admin.jobs');

    Route::get('/applicants', [ApplicantController::class, 'index'])
        ->name('admin.applicants');
});
