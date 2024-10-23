<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController; // Add this line to import the DashboardController.

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/announcement', [DashboardController::class, 'announcement'])->name('announcement');
Route::get('/building', [DashboardController::class, 'building'])->name('building');
Route::get('/departments', [DashboardController::class, 'departments'])->name('departments');
Route::get('/courses', [DashboardController::class, 'courses'])->name('courses');
Route::get('/curriculum', [DashboardController::class, 'curriculum'])->name('curriculum');
Route::get('/subject', [DashboardController::class, 'subject'])->name('subject');

