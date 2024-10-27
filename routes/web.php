<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HrDashboardController;
use App\Http\Controllers\EmployeesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hr-dashboard', [HrDashboardController::class, 'index']);
Route::get('/employee-dashboard', [EmployeesController::class, 'index']);
Route::get('/employee-list', [EmployeesController::class, 'show']);
