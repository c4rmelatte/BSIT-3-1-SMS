<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DTRController;

// example log in
Route::get('/login', function () {
    return view('pages/example_login');
});

Route::get('/login/user', [DTRController::class, 'login'])->name('login.user');

// ATTENDANCE & PAYROLL ROUTES
Route::get('/dtr_input', [DTRController::class, 'index']);

Route::get('/dtr_input/check', [DTRController::class, 'checkRole'])->name('check.id');
Route::post('/dtr_input/logTime', [DTRController::class, 'logTime'])->name('input.time');

Route::get('/dtr_input/{id}/showDTR', [DTRController::class, 'getDTR'])->name('show.time');
Route::get('/dtr_input/getDateDTR', [DTRController::class, 'getDateDTR'])->name('show.dateDTR');


//