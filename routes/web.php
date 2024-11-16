<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\BuildingController; // Add the BuildingController

// Home route
Route::get('/', function () {
    return view('home');
});

// Dashboard routes
Route::get('/studentdash', [StudentDashboardController::class, 'index']);
Route::get('/admindash', [AdminDashboardController::class, 'index'])->name('admindash');
Route::get('/departmentdash', [AdminDashboardController::class, 'showDepartmentDash'])->name('departmentdash');
Route::get('/buildingdash', [AdminDashboardController::class, 'showBuildingDash'])->name('buildingdash');
// Teacher dashboard route// web.php

Route::get('/teacherdash', [TeacherDashboardController::class, 'index']);

// Department routes
Route::prefix('departments')->name('departments.')->group(function () {
    Route::get('/', [DepartmentController::class, 'index'])->name('index'); 
    Route::get('/create', [DepartmentController::class, 'create'])->name('create');
    Route::post('/store', [DepartmentController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [DepartmentController::class, 'edit'])->name('edit');
    Route::put('/{id}', [DepartmentController::class, 'update'])->name('update');
    Route::delete('/{id}', [DepartmentController::class, 'destroy'])->name('destroy');
});

// Building routes
Route::prefix('buildings')->name('buildings.')->group(function () {
    Route::get('/', [BuildingController::class, 'index'])->name('index'); 
    Route::get('/create', [BuildingController::class, 'create'])->name('create');
    Route::post('/store', [BuildingController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [BuildingController::class, 'edit'])->name('edit');
    Route::put('/{id}', [BuildingController::class, 'update'])->name('update');
    Route::delete('/{id}', [BuildingController::class, 'destroy'])->name('destroy');
});

