<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PurposeController;
use App\Http\Controllers\CreatePaymentController;
use App\Http\Controllers\HomepageController;
use App\Models\User;


Route::get('/', function () {
    $users = User::all();
    return view('homepage', compact('users'));

    
});

Route::get('/studentdashboard',[StudentController::class, 'index']);


Route::get('/createpayment',[PaymentController::class, 'index']);

Route::get('payment/history',[PaymentController::class, 'history'])->name('history');

Route::get('/dashboard1', [PaymentController::class, 'index1'])->name('dashboard1');
Route::get('/dashboard2', [PaymentController::class, 'index2'])->name('dashboard2');

Route::post('/payment/pay/misc', [PaymentController::class, 'payMisc'])->name('start_payment_misc');
Route::post('/payment/pay/tuit', [PaymentController::class, 'payTuit'])->name('start_payment_tuit');

Route::get('/payment/misc', [PaymentController::class, 'misc'])->name('pay_misc');
Route::get('/payment/tuit', [PaymentController::class, 'tuit'])->name('pay_tuit');

Route::get('/payment/receipt/{id}', [PaymentController::class, 'showReceipt'])->name('get_receipt');



Route::get('/home',[HomepageController::class, 'index']);
Route::get('/payment',[CreatePaymentController::class, 'index']);

Route::get('/admindashboard',[AdminController::class, 'index'])->name('admindashboard');

Route::get('/treasurer/create/purpose', [AdminController::class, 'createPurpose'])->name('create_purpose');
Route::post('/treasurer/store/purpose', [AdminController::class, 'storePurpose'])->name('store_purpose');

Route::get('/treasurer/edit/purpose/{id}', [AdminController::class, 'editPurpose'])->name('edit_purpose');
Route::put('/treasurer/update/purpose/{id}', [AdminController::class, 'updatePurpose'])->name('update_purpose');

Route::delete('/treasurer/delete/purpose/{id}', [AdminController::class, 'deletePurpose'])->name('delete_purpose');

Route::get('/treasurer/create/announcement', [AdminController::class, 'createAnnouncement'])->name('create_announcement');
Route::post('/treasurer/store/announcement', [AdminController::class, 'storeAnnouncement'])->name('store_announcement');

Route::get('/treasurer/edit/announcement/{id}', [AdminController::class, 'editAnnouncement'])->name('edit_announcement');
Route::put('/treasurer/update/announcement/{id}', [AdminController::class, 'updateAnnouncement'])->name('update_announcement');

Route::delete('/treasurer/delete/announcement/{id}', [AdminController::class, 'deleteAnnouncement'])->name('delete_announcement');

Route::get('/treasurer/edit/payment/{id}', [AdminController::class, 'editPayment'])->name('edit_payment');
Route::put('/treasurer/update/payment/{id}', [AdminController::class, 'updatePayment'])->name('update_payment');
Route::delete('/treasurer/delete/payment/{id}', [AdminController::class, 'deletePayment'])->name('delete_payment');
