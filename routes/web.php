<?php

use Illuminate\Support\Facades\Route;
// routes/web.php

use App\Http\Controllers\EnrollmentController;






// Home Route
Route::get('/', function () {
    return view('welcome');
});

// Enrollment Main Page
Route::get('/enrollment', function () {
    return view('enrollment');
})->name('enrollment');

// Enrollment Subpages
Route::prefix('enrollment')->group(function () {
    Route::get('/elementary', function () {
        return view('enrollment.elementary');
    })->name('enrollment.elementary');
    
    Route::get('/highschool', function () {
        return view('enrollment.highschool');
    })->name('enrollment.highschool');
    
    Route::get('/senior_high', function () {
        return view('enrollment.senior_high');
    })->name('enrollment.senior_high');
    
    Route::get('/college', function () {
        return view('enrollment.college');
    })->name('enrollment.college');
    
    
    Route::post('/elementary/store', function () {
       
    })->name('enrollment.elementary.store');

    Route::post('/highschool/store', function () {
       
    })->name('enrollment.highschool.store');

    Route::post('/senior_high/store', function () {
    })->name('enrollment.senior_high.store');

    Route::post('/college/store', function () {

    })->name('enrollment.college.store');
});


Route::get('/view-students', function () {
    return view('enrollment.view_students');
})->name('view_students');

// Enrollment Information
Route::get('/enrollment-info', [EnrollmentController::class, 'show'])->name('enrollment_info');
