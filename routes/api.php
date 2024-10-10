<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::apiResource('employees', EmployeesController::class);
Route::apiResource('positions', PositionsController::class);
Route::apiResource('roles', RolesController::class);