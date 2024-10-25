<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\TeacherDashboardController;

Route::get('/', function () {
    return view('home');
});


Route::get('/studentdash', [StudentDashboardController::class, 'index']);
Route::get('/admindash', [AdminDashboardController::class, 'index']);
Route::get('/teacherdash', [TeacherDashboardController::class, 'index']);