<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminDashBoardController;
use Illuminate\Support\Facades\Route;

// Show login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Process login form submission
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Protected route for the admin dashboard
Route::get('/admindash', [AdminDashBoardController::class, 'index'])
     ->name('admindash')
     ->middleware('auth'); // Ensure this route is protected

