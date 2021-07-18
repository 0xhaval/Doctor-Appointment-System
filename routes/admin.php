<?php

use App\Http\Controllers\Backend\AppointmentController;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Backend\MedicalLabController;
use App\Http\Controllers\Backend\PatientController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [HomeController::class, 'adminHome'])->name('home');
    Route::resource('doctor', DoctorController::class);
    Route::resource('patient', PatientController::class);
    Route::resource('appointment', AppointmentController::class);
    Route::resource('medical', MedicalLabController::class);
    Route::resource('user', UserController::class);
    Route::get('report', function () {
        return view('backend.appointments.report');
    })->name('appointment.report');
});
