<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HrDashboardController;
use App\Http\Controllers\EmployeeDashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hr-dashboard', [HrDashboardController::class, 'index']);
Route::get('/employee-dashboard', [EmployeeDashboardController::class, 'index']);
