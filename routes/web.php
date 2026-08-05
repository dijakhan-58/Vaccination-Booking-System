<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\VaccinationScheduleController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ParentRequestController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingsController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//dashboard 

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.home');

// Child Management
Route::prefix('children')->name('children.')->group(function () {
    Route::get('/', [ChildController::class, 'index'])->name('index');
    Route::get('/create', [ChildController::class, 'create'])->name('create');
    Route::post('/', [ChildController::class, 'store'])->name('store');
    Route::get('/{child}', [ChildController::class, 'profile'])->name('profile');
    Route::get('/{child}/edit', [ChildController::class, 'edit'])->name('edit');
    Route::put('/{child}', [ChildController::class, 'update'])->name('update');
    Route::delete('/{child}', [ChildController::class, 'destroy'])->name('destroy');
});

// Vaccination Schedule
Route::prefix('vaccination-schedule')->name('vaccination-schedule.')->group(function () {
    Route::get('/today', [VaccinationScheduleController::class, 'today'])->name('today');
    Route::get('/upcoming', [VaccinationScheduleController::class, 'upcoming'])->name('upcoming');
    Route::get('/calendar', [VaccinationScheduleController::class, 'calendar'])->name('calendar');
});

// Vaccine Management
Route::prefix('vaccines')->name('vaccines.')->group(function () {
    Route::get('/', [VaccineController::class, 'index'])->name('index');
    Route::get('/availability', [VaccineController::class, 'availability'])->name('availability');
    Route::get('/inventory', [VaccineController::class, 'inventory'])->name('inventory');
});

// Hospital Management
Route::prefix('hospitals')->name('hospitals.')->group(function () {
    Route::get('/', [HospitalController::class, 'index'])->name('index');
    Route::get('/create', [HospitalController::class, 'create'])->name('create');
    Route::post('/', [HospitalController::class, 'store'])->name('store');
    Route::get('/manage', [HospitalController::class, 'manage'])->name('manage');
    Route::get('/{hospital}/edit', [HospitalController::class, 'edit'])->name('edit');
    Route::put('/{hospital}', [HospitalController::class, 'update'])->name('update');
    Route::delete('/{hospital}', [HospitalController::class, 'destroy'])->name('destroy');
});

// Booking Management
Route::prefix('bookings')->name('bookings.')->group(function () {
    Route::get('/', [BookingController::class, 'details'])->name('details');
    Route::get('/upcoming', [BookingController::class, 'upcoming'])->name('upcoming');
    Route::get('/completed', [BookingController::class, 'completed'])->name('completed');
    Route::get('/cancelled', [BookingController::class, 'cancelled'])->name('cancelled');
    Route::get('/{booking}', [BookingController::class, 'show'])->name('show');
});

// Parent Requests
Route::prefix('parent-requests')->name('parent-requests.')->group(function () {
    Route::get('/pending', [ParentRequestController::class, 'pending'])->name('pending');
    Route::get('/approved', [ParentRequestController::class, 'approved'])->name('approved');
    Route::get('/rejected', [ParentRequestController::class, 'rejected'])->name('rejected');
    Route::patch('/{parentRequest}/approve', [ParentRequestController::class, 'approve'])->name('approve');
    Route::patch('/{parentRequest}/reject', [ParentRequestController::class, 'reject'])->name('reject');
});

// Reports
Route::prefix('reports')->name('reports.')->group(function () {
    Route::get('/child', [ReportController::class, 'child'])->name('child');
    Route::get('/vaccination', [ReportController::class, 'vaccination'])->name('vaccination');
    Route::get('/date-wise', [ReportController::class, 'datewise'])->name('datewise');
});

// Settings
Route::prefix('settings')->name('settings.')->group(function () {
    Route::get('/profile', [SettingsController::class, 'profile'])->name('profile');
    Route::put('/profile', [SettingsController::class, 'updateProfile'])->name('profile.update');
    Route::get('/password', [SettingsController::class, 'password'])->name('password');
    Route::put('/password', [SettingsController::class, 'updatePassword'])->name('password.update');
    Route::get('/system', [SettingsController::class, 'system'])->name('system');
    Route::put('/system', [SettingsController::class, 'updateSystem'])->name('system.update');
});

// Logout (adjust to match your auth scaffolding, e.g. Breeze/Jetstream already provides this)
// Route::post('/logout', function () {
//     Auth::logout();
//     request()->session()->invalidate();
//     request()->session()->regenerateToken();
//     return redirect('/login');
// })->name('logout');


require __DIR__.'/auth.php';