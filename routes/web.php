<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\InvoiceController;



use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('patients', PatientController::class);

Route::resource('appointments', AppointmentController::class);

Route::resource('doctors', DoctorController::class);

Route::resource('medical_records', MedicalRecordController::class);

Route::resource('services', ServiceController::class);
Route::resource('invoices', InvoiceController::class);

