<?php

use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;




Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Admin Profile
Route::get('/my-profile', [AdminProfileController::class, 'viewProfile'])->name('profile');