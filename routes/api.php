<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\PositionsController;
use App\Http\Controllers\RolesController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::apiResource('employees', EmployeesController::class);
Route::apiResource('positions', PositionsController::class);
Route::apiResource('roles', RolesController::class);