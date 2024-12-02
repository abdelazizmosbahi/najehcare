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


Route::resource('invoices', InvoiceController::class);
Route::resource('services', ServiceController::class);
Route::resource('doctors', DoctorController::class);
Route::resource('patients', PatientController::class);
Route::resource('medical-records', MedicalRecordController::class);



//appointment
// Add the following line for the appointments resource route
Route::resource('appointments', AppointmentController::class);
Route::get('appointments', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('appointments/{appointment}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
Route::put('appointments/{appointment}', [AppointmentController::class, 'update'])->name('appointments.update');
Route::delete('appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');



//invoice
Route::prefix('invoices')->group(function () {
    Route::get('/', [InvoiceController::class, 'index'])->name('invoices.index'); // View all invoices
    Route::get('/create', [InvoiceController::class, 'create'])->name('invoices.create'); // Create an invoice
    Route::post('/', [InvoiceController::class, 'store'])->name('invoices.store'); // Store an invoice
    Route::get('/{invoice}/edit', [InvoiceController::class, 'edit'])->name('invoices.edit'); // Edit an invoice
    Route::put('/{invoice}', [InvoiceController::class, 'update'])->name('invoices.update'); // Update an invoice
    Route::get('/{invoice}', [InvoiceController::class, 'show'])->name('invoices.show'); // Show a single invoice
    Route::delete('/{invoice}', [InvoiceController::class, 'destroy'])->name('invoices.destroy'); // Delete an invoice
});

//services
Route::prefix('services')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('services.index'); // View all services
    Route::get('/create', [ServiceController::class, 'create'])->name('services.create'); // Create a service
    Route::post('/', [ServiceController::class, 'store'])->name('services.store'); // Store a service
    Route::get('/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit'); // Edit a service
    Route::put('/{service}', [ServiceController::class, 'update'])->name('services.update'); // Update a service
    Route::get('/{service}', [ServiceController::class, 'show'])->name('services.show'); // Show a single service
    Route::delete('/{service}', [ServiceController::class, 'destroy'])->name('services.destroy'); // Delete a service
});

//doctor
Route::prefix('doctors')->group(function () {
    Route::get('/', [DoctorController::class, 'index'])->name('doctors.index'); // View all doctors
    Route::get('/create', [DoctorController::class, 'create'])->name('doctors.create'); // Create a doctor
    Route::post('/', [DoctorController::class, 'store'])->name('doctors.store'); // Store a doctor
    Route::get('/{doctor}/edit', [DoctorController::class, 'edit'])->name('doctors.edit'); // Edit a doctor
    Route::put('/{doctor}', [DoctorController::class, 'update'])->name('doctors.update'); // Update a doctor
    Route::get('/{doctor}', [DoctorController::class, 'show'])->name('doctors.show'); // Show a single doctor
    Route::delete('/{doctor}', [DoctorController::class, 'destroy'])->name('doctors.destroy'); // Delete a doctor
});

//patient
Route::prefix('patients')->group(function () {
    Route::get('/', [PatientController::class, 'index'])->name('patients.index'); // View all patients
    Route::get('/create', [PatientController::class, 'create'])->name('patients.create'); // Create a patient
    Route::post('/', [PatientController::class, 'store'])->name('patients.store'); // Store a patient
    Route::get('/{patient}/edit', [PatientController::class, 'edit'])->name('patients.edit'); // Edit a patient
    Route::put('/{patient}', [PatientController::class, 'update'])->name('patients.update'); // Update a patient
    Route::get('/{patient}', [PatientController::class, 'show'])->name('patients.show'); // Show a single patient
    Route::delete('/{patient}', [PatientController::class, 'destroy'])->name('patients.destroy'); // Delete a patient
});

//medical reocrd controller
Route::prefix('medical_records')->group(function () {
    Route::get('/', [MedicalRecordController::class, 'index'])->name('medical_records.index'); // View all medical records
    Route::get('/create', [MedicalRecordController::class, 'create'])->name('medical_records.create'); // Create a medical record
    Route::post('/', [MedicalRecordController::class, 'store'])->name('medical_records.store'); // Store a medical record
    Route::get('/{medical_record}/edit', [MedicalRecordController::class, 'edit'])->name('medical_records.edit'); // Edit a medical record
    Route::put('/{medical_record}', [MedicalRecordController::class, 'update'])->name('medical_records.update'); // Update a medical record
    Route::get('/{medical_record}', [MedicalRecordController::class, 'show'])->name('medical_records.show'); // Show a single medical record
    Route::delete('/{medical_record}', [MedicalRecordController::class, 'destroy'])->name('medical_records.destroy'); // Delete a medical record
});



