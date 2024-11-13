<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ActGradeController;

Route::get('/', function () {
    return view('home');
});


Route::get('/studentdash', [StudentDashboardController::class, 'index']);
Route::get('/admindash', [AdminDashboardController::class, 'index']);
Route::get('/teacherdash', [TeacherDashboardController::class, 'index']);
Route::get('/creategrade', [GradeController::class, 'index']);
Route::get('/studentlist', [StudentController::class, 'index']);
Route::get('/actgrade', [ActGradeController::class, 'index']);