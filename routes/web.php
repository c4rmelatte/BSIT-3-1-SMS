<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PurposeController;
use App\Http\Controllers\CreatePaymentController;
use App\Http\Controllers\HomepageController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/studentdashboard',[StudentController::class, 'index']);


Route::get('/createpayment',[PaymentController::class, 'index']);
Route::get('payment/history',[PaymentController::class, 'history'])->name('history');
Route::get('/dashboard', [PaymentController::class, 'index'])->name('dashboard');
Route::post('/payment/pay', [PaymentController::class, 'pay'])->name('start_payment');
Route::get('/payment/pay/misc', [PaymentController::class, 'payMisc'])->name('pay_misc');


Route::get('/home',[HomepageController::class, 'index']);
Route::get('/payment',[CreatePaymentController::class, 'index']);

Route::get('/admindashboard',[AdminController::class, 'index'])->name('admindashboard');
Route::get('/treasurer/create/purpose', [AdminController::class, 'createPurpose'])->name('create_purpose');
Route::post('/treasurer/store/purpose', [AdminController::class, 'storePurpose'])->name('store_purpose');
Route::get('/treasurer/create/announcement', [AdminController::class, 'createAnnouncement'])->name('create_announcement');
Route::post('/treasurer/store/announcement', [AdminController::class, 'storeAnnouncement'])->name('store_announcementAdmin');

