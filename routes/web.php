<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/landing', function () {
//     return view('landing');
// });

Route::get('/',[LandingController::class,'index']) ->name('landing');

Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});