<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HrDashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hr-dashboard', [HrDashboardController::class, 'index']);
