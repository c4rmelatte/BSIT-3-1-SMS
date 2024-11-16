<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/gradeschool', function () {
    return view('gradeschool');
})->name('gradeschool');

Route::get('/juniorhigh', function () {
    return view('juniorhigh');
})->name('juniorhigh');

Route::get('/seniorhigh', function () {
    return view('seniorhigh');
})->name('seniorhigh');

Route::get('/college', function () {
    return view('college');
})->name('college');

//GRADE 1 - 6
Route::get('/gradeschool/grade1', function () {
    return view('grade1');
})->name('grade1');

Route::get('/gradeschool/grade2', function () {
    return view('grade2');
})->name('grade2');

Route::get('/gradeschool/grade3', function () {
    return view('grade3');
})->name('grade3');

Route::get('/gradeschool/grade4', function () {
    return view('grade4');
})->name('grade4');

Route::get('/gradeschool/grade5', function () {
    return view('grade5');
})->name('grade5');

Route::get('/gradeschool/grade6', function () {
    return view('grade6');
})->name('grade6');

//GRADE 7 - 10
Route::get('/grade7', function () {
    return view('grade7');
})->name('grade7');

Route::get('/grade8', function () {
    return view('grade8');
})->name('grade8');

Route::get('/grade9', function () {
    return view('grade9');
})->name('grade9');

Route::get('/grade10', function () {
    return view('grade10');
})->name('grade10');

//GRADE 11 & 12
Route::get('/grade11', function () {
    return view('grade11');
})->name('grade11');

Route::get('/grade12', function () {
    return view('grade12');
})->name('grade12');

Route::get('/createsubjectsg1', function () {
    return view('createsubjectsg1');
})->name('createsubjectsg1');

Route::get('/createsubjectsg2', function () {
    return view('createsubjectsg2');
})->name('createsubjectsg2');

Route::get('/createsubjectsg3', function () {
    return view('createsubjectsg3');
})->name('createsubjectsg3');

Route::get('/createsubjectsg4', function () {
    return view('createsubjectsg4');
})->name('createsubjectsg4');

Route::get('/createsubjectsg5', function () {
    return view('createsubjectsg5');
})->name('createsubjectsg5');

Route::get('/createsubjectsg6', function () {
    return view('createsubjectsg6');
})->name('createsubjectsg6');

Route::get('/createsubjectsg7', function () {
    return view('createsubjectsg7');
})->name('createsubjectsg7');

Route::get('/createsubjectsg8', function () {
    return view('createsubjectsg8');
})->name('createsubjectsg8');

Route::get('/createsubjects9', function () {
    return view('createsubjectsg9');
})->name('createsubjectsg9');

Route::get('/createsubjectsg10', function () {
    return view('createsubjectsg10');
})->name('createsubjectsg10');

Route::get('/createsubjectsg11', function () {
    return view('createsubjectsg11');
})->name('createsubjectsg11');

Route::get('/createsubjectsg12', function () {
    return view('createsubjectsg12');
})->name('createsubjectsg12');

// Route::get('/viewsubjects', function () {
//     return view('viewsubjects');
// })->name('viewsubjects');

Route::match(['get', 'post'], '/viewsubjectsg1', [SubjectController::class, 'viewSubject'])->name('viewsubjectsg1');

Route::get('/editsubjectg1', function () {
    return view('editsubjectg1');
})->name('editsubjectg1');

Route::match(['get', 'post'], '/viewsubjectsg2', [SubjectController::class, 'viewSubject'])->name('viewsubjectsg2');

Route::get('/editsubjectg2', function () {
    return view('editsubjectg2');
})->name('editsubjectg2');


Route::match(['get', 'post'], '/viewsubjectsg3', [SubjectController::class, 'viewSubject'])->name('viewsubjectsg3');

Route::get('/editsubjectg3', function () {
    return view('editsubjectg3');
})->name('editsubjectg3');

Route::match(['get', 'post'], '/viewsubjectsg4', [SubjectController::class, 'viewSubject'])->name('viewsubjectsg4');

Route::get('/editsubjectg4', function () {
    return view('editsubjectg4');
})->name('editsubjectg4');

Route::match(['get', 'post'], '/viewsubjectsg5', [SubjectController::class, 'viewSubject'])->name('viewsubjectsg5');

Route::get('/editsubjectg5', function () {
    return view('editsubjectg5');
})->name('editsubjectg5');

Route::match(['get', 'post'], '/viewsubjectsg6', [SubjectController::class, 'viewSubject'])->name('viewsubjectsg6');

Route::get('/editsubjectg6', function () {
    return view('editsubjectg6');
})->name('editsubjectg6');

Route::match(['get', 'post'], '/viewsubjectsg7', [SubjectController::class, 'viewSubject'])->name('viewsubjectsg7');

Route::get('/editsubjectg7', function () {
    return view('editsubjectg7');
})->name('editsubjectg7');

Route::match(['get', 'post'], '/viewsubjectsg8', [SubjectController::class, 'viewSubject'])->name('viewsubjectsg8');

Route::get('/editsubjectg8', function () {
    return view('editsubjectg8');
})->name('editsubjectg8');

Route::match(['get', 'post'], '/viewsubjectsg9', [SubjectController::class, 'viewSubject'])->name('viewsubjectsg9');

Route::get('/editsubjectg9', function () {
    return view('editsubjectg9');
})->name('editsubjectg9');


Route::match(['get', 'post'], '/viewsubjectsg10', [SubjectController::class, 'viewSubject'])->name('viewsubjectsg10');

Route::get('/editsubjectg10', function () {
    return view('editsubjectg10');
})->name('editsubjectg10');

Route::match(['get', 'post'], '/viewsubjectsg11', [SubjectController::class, 'viewSubject'])->name('viewsubjectsg11');

Route::get('/editsubjectg11', function () {
    return view('editsubjectg11');
})->name('editsubjectg11');

Route::match(['get', 'post'], '/viewsubjectsg12', [SubjectController::class, 'viewSubject'])->name('viewsubjectsg12');

Route::get('/editsubjectg12', function () {
    return view('editsubjectg12');
})->name('editsubjectg12');

Route::get('/viewcourses', function () {
    return view('viewcourses');
})->name('view-courses');

Route::get('/bsit', function () {
    return view('bsit'); // Make sure you have a view named 'bsit.blade.php'
})->name('bsit');

Route::get('/computerengineering', function () {
    return view('computerengineering'); // Make sure you have a view named 'computerengineering.blade.php'
})->name('computerengineering');

Route::get('/first-year', function () {
    return view('first-year');
})->name('first_year');

Route::get('/second-year', function () {
    return view('second-year');
})->name('second_year');

Route::get('/third-year', function () {
    return view('third-year');
})->name('third_year');

Route::get('/fourth-year', function () {
    return view('fourth-year');
})->name('fourth_year');


// Route::post('/storesubject', [SubjectController::class, 'store'])->name('storesubject');
