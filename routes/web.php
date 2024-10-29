<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashBoardController;

// Home route
Route::get('/', function () {
    return view('home');
});

Route::get('/admindash', [AdminDashBoardController::class, 'index'])->name('admindash');

