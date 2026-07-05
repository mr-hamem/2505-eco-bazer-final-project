<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'homepage'])->name('frontend.index');

Route::get('admin/categories', function () {
    return view('content.categories.index');
});
// Admin Login Routes
Auth::routes();



