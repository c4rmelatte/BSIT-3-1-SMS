<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DTRController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\AttendanceController;

// example log in """ SHOULD BE REMOVED """
Route::get('/login', function () {
    return view('pages/example_login');
});
// example log in """ SHOULD BE REMOVED """
Route::get('/login/user', [DTRController::class, 'login'])->name('login.user');

// ATTENDANCE & PAYROLL ROUTES ###################################################################################################################################
// dtr  
Route::get('/dtr_input', [DTRController::class, 'index']);

Route::get('/dtr_input/check', [DTRController::class, 'checkRole'])->name('check.id');
Route::post('/dtr_input/logTime', [DTRController::class, 'logTime'])->name('input.time');

Route::get('/dtr_input/{id}/showDTR', [DTRController::class, 'getDTR'])->name('show.time');
Route::get('/dtr_input/getDateDTR', [DTRController::class, 'getDateDTR'])->name('show.dateDTR');

// payroll
Route::get('/treasurer/managePayroll', [PayrollController::class, 'managePayroll'])->name('manage.payslip');
// creating a payslip
Route::get('/treasurer/createPayslip', [PayrollController::class, 'createPayslip'])->name('create.payslip');
Route::post('/treasurer/insertPayslip', [PayrollController::class, 'insertPayslip'])->name('insert.payslip');
// find employee
Route::get('/treasurer/findEmployee', [PayrollController::class, 'findEmployee'])->name('find.employee');
// updating a payslip
Route::get('/treasurer/updatePayslip', [PayrollController::class, 'updatePayslip'])->name('update.payslip');
Route::put('/treasurer/insertUpdatedPayslip', [PayrollController::class, 'insertUpdatedPayslip'])->name('insert.updated.payslip');
// show payslip
Route::get('/treasurer/showPayslip', [PayrollController::class, 'showPayslip'])->name('show.payslip');
// back to manange_payslip
Route::get('/treasurer/backPayslip', [PayrollController::class, 'backPayslip'])->name('back.payslip');
// delete payslip
Route::delete('/treasurer/deletePayslip', [PayrollController::class, 'deletePayslip'])->name('delete.payslip');


// class attendance
// prof view
// show subjects
Route::get('/professor/showSubjects', [AttendanceController::class, 'showSubjects'])->name('show.subjects');
// show subject attendance
Route::get('/professor/showAttendance', [AttendanceController::class, 'showProfAttendance'])->name('show.prof.attendance');
// add date subject attendance
Route::post('/professor/addAttendance', [AttendanceController::class, 'addProfAttendance'])->name('add.prof.attendance');
// find attendance
Route::get('/professor/findAttendance', [AttendanceController::class, 'findAttendance'])->name('find.prof.attendance');
// update attendance
Route::put('/professor/updateAttendance', [AttendanceController::class, 'updateAttendance'])->name('update.prof.attendance');
// delete attendance
Route::put('/professor/deleteAttendance', [AttendanceController::class, 'deleteAttendance'])->name('delete.prof.attendance');

// student view
// show student's subjects
Route::get('/student/showStudentSubjects', [AttendanceController::class, 'showStudentSubjects'])->name('show.student.subjects');
// show subject attendance page
Route::get('/student/showStudentAttendancePage', [AttendanceController::class, 'showStudentAttendancePage'])->name('show.student.attendance.page');
// show subject attendance on a subject checklist
Route::get('/student/showSubjectAttendance', [AttendanceController::class, 'showSubjectAttendance'])->name('show.student.attendance');

// event/program attendance
// show program head events
Route::get('/programHead/showEvents', [AttendanceController::class, 'showEvents'])->name('show.events');
// show create event page
Route::get('/programHead/createEvents', [AttendanceController::class, 'createEvents'])->name('create.events');
// insert created event
Route::post('/programHead/insertEvents', [AttendanceController::class, 'insertEvents'])->name('insert.events');
// show event attendance
Route::get('/programHead/showEventAttendance', [AttendanceController::class, 'showEventAttendance'])->name('show.event.events');
// save/update event attendance
Route::put('/programHead/updateEventAttendance', [AttendanceController::class, 'updateEventAttendance'])->name('update.event');
// show edit event info page
Route::get('/programHead/editEventAttendance', [AttendanceController::class, 'editEventAttendance'])->name('edit.event');
// insert edit event info
Route::put('/programHead/insertEditEventAttendance', [AttendanceController::class, 'insertEditEventAttendance'])->name('insert.edit.event');
// delete event
Route::delete('/programHead/deleteEventAttendance', [AttendanceController::class, 'deleteEventAttendance'])->name('delete.event');

// ###############################################################################################################################################################