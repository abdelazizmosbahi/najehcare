<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

// Doctor Routes
Route::get('doctors', [DoctorController::class, 'index']);
Route::get('doctors/{doctor}', [DoctorController::class, 'show']);
Route::post('doctors', [DoctorController::class, 'store']);
Route::put('doctors/{doctor}', [DoctorController::class, 'update']);
Route::delete('doctors/{doctor}', [DoctorController::class, 'destroy']);

// Appointment Routes
Route::get('appointments', [AppointmentController::class, 'index']);
Route::get('appointments/{appointment}', [AppointmentController::class, 'show']);
Route::post('appointments', [AppointmentController::class, 'store']);
Route::put('appointments/{appointment}', [AppointmentController::class, 'update']);
Route::delete('appointments/{appointment}', [AppointmentController::class, 'destroy']);

// Medical Record Routes
Route::get('medical-records', [MedicalRecordController::class, 'index']);
Route::get('medical-records/{medicalRecord}', [MedicalRecordController::class, 'show']);
Route::post('medical-records', [MedicalRecordController::class, 'store']);
Route::put('medical-records/{medicalRecord}', [MedicalRecordController::class, 'update']);
Route::delete('medical-records/{medicalRecord}', [MedicalRecordController::class, 'destroy']);

// Service Routes
Route::get('services', [ServiceController::class, 'index']);
Route::get('services/{service}', [ServiceController::class, 'show']);
Route::post('services', [ServiceController::class, 'store']);
Route::put('services/{service}', [ServiceController::class, 'update']);
Route::delete('services/{service}', [ServiceController::class, 'destroy']);

// Invoice Routes
Route::get('invoices', [InvoiceController::class, 'index']);
Route::get('invoices/{invoice}', [InvoiceController::class, 'show']);
Route::post('invoices', [InvoiceController::class, 'store']);
Route::put('invoices/{invoice}', [InvoiceController::class, 'update']);
Route::delete('invoices/{invoice}', [InvoiceController::class, 'destroy']);
