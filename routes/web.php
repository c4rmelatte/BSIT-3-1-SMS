<?php

use App\Http\Controllers\ScheduleController;

Route::get('/schedule', [ScheduleController::class, 'index']); // View all schedules
Route::get('/schedule/create', [ScheduleController::class, 'create']); // Show create form
Route::post('/schedule', [ScheduleController::class, 'store']); // Handle create form submission
Route::get('/schedule/{id}', [ScheduleController::class, 'show']); // Show a single schedule
Route::get('/schedule/{id}/edit', [ScheduleController::class, 'edit']); // Show edit form
Route::put('/schedule/{id}', [ScheduleController::class, 'update']); // Handle edit form submission
Route::delete('/schedule/{id}', [ScheduleController::class, 'destroy']); // Delete a schedule

Route::get('/', function () {
    return view('welcome');
});
