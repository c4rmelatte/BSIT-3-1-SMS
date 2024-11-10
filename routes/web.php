<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashBoardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
// Home route
Route::get('/', function () {
    return view('home');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Process login form submission
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Protected route for the admin dashboard
Route::get('/admindash', [AdminDashBoardController::class, 'index'])
     ->name('admindash')
     ->middleware('auth');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');