<?php

use Illuminate\Support\Facades\Route;

// Admin
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\HospitalController as AdminHospitalController;
use App\Http\Controllers\Admin\VaccineController as AdminVaccineController;
use App\Http\Controllers\Admin\ChildController as AdminChildController;
use App\Http\Controllers\Admin\ParentRequestController as AdminParentRequestController;
use App\Http\Controllers\Admin\Vaccination_reportController as AdminVaccination_reportController;
use App\Http\Controllers\Admin\Vaccination_statusController as AdminVaccination_statusController;
use App\Http\Controllers\Admin\upcoming_vaccinestatusController as Adminupcoming_vaccinestatusController;


use App\Http\Controllers\Admin\BookingController as AdminBookingController;
// use App\Http\Controllers\Admin\VaccinationRecordController as AdminVaccinationRecordController;
use App\Http\Controllers\Admin\CertificateController as AdminCertificateController;
use App\Http\Controllers\Admin\UpcomingVaccineController as AdminUpcomingVaccineController;
use App\Http\Controllers\Admin\NotificationController as AdminNotificationController;
use Spatie\Permission\Middleware\PermissionMiddleware;


// Hospital

use App\Http\Controllers\Hospital\HospitalBookingController;
use App\Http\Controllers\Hospital\HospitalInventoryController;
use App\Http\Controllers\Hospital\HospitalVaccinationController;
use App\Http\Controllers\Hospital\HospitalCertificateController;

// Parent
use App\Http\Controllers\ParentPortal\ParentDashboardController;
use App\Http\Controllers\ParentPortal\ParentChildController;
use App\Http\Controllers\ParentPortal\ParentBookingController;
use App\Http\Controllers\ParentPortal\ParentVaccinationController;
use App\Http\Controllers\ParentPortal\ParentNotificationController;

// Website
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Website\VaccinationController;
use App\Http\Controllers\Website\ContactController;


/*
|--------------------------------------------------------------------------
| Admin Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [AdminDashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware(['auth', 'verified']);

Route::get('/users', [AdminUserController::class, 'index'])
    ->name('users')
    ->middleware(['auth', 'verified']);




/*
|--------------------------------------------------------------------------
| Children
|--------------------------------------------------------------------------
*/

Route::get('children/fetch', [AdminChildController::class, 'index'])
    ->name('children.index')
    ->middleware(['auth', 'verified']);

Route::get('children/add', [AdminChildController::class, 'create'])
    ->name('children.add')
    ->middleware(['auth', 'verified']);

Route::post('children/store', [AdminChildController::class, 'store'])
    ->name('children.store')
    ->middleware(['auth', 'verified']);

Route::get('children/edit/{child}', [AdminChildController::class, 'edit'])
    ->name('children.edit')
    ->middleware(['auth', 'verified']);

Route::put('children/update/{child}', [AdminChildController::class, 'update'])
    ->name('children.update')
    ->middleware(['auth', 'verified']);

Route::delete('children/delete/{child}', [AdminChildController::class, 'destroy'])
    ->name('children.destroy')
    ->middleware(['auth', 'verified']);

    /*
|--------------------------------------------------------------------------
| Hospitals
|--------------------------------------------------------------------------
*/

Route::get('hospitals/fetch', [AdminHospitalController::class, 'index'])->name('hospitals.fetch')
->middleware(['auth', 'verified']);
Route::get('hospitals/add', [AdminHospitalController::class, 'create'])->name('hospitals.add')
->middleware(['auth', 'verified']);

/*
|--------------------------------------------------------------------------
| Vaccines Management
|--------------------------------------------------------------------------
*/

Route::get('/vaccine_managemnet/index', [AdminVaccineController::class, 'index'])
    ->name('vaccines.index')
    ->middleware(['auth', 'verified']);

Route::get('/vaccine_managemnet/add', [AdminVaccineController::class, 'create'])
    ->name('vaccines.add')
    ->middleware(['auth', 'verified']);


/*
|--------------------------------------------------------------------------
| upcoming Vaccine 
|--------------------------------------------------------------------------
*/

Route::get('/upcoming_vaccine/index', [AdminUpcomingVaccineController::class, 'index'])
    ->name('upcoming_index')
    ->middleware(['auth', 'verified']);

    // Vaccination report 

Route::get('vaccination_reports/index', [AdminVaccination_reportController::class, 'index'])
    ->name('vaccin_report_index')
    ->middleware(['auth', 'verified']);
Route::get('vaccination_reports/add', [AdminVaccination_reportController::class, 'create'])
    ->name('vaccin_report_add')
    ->middleware(['auth', 'verified']);



    // vaccienation status 
Route::get('Vaccination_status/fetch', [AdminVaccination_statusController::class, 'index'])
    ->name('vaccine_status_index')
    ->middleware(['auth', 'verified']);


// parent reuqst 
Route::get('parent-request/fetch', [AdminParentRequestController::class, 'index'])
    ->name('parent_index')
    ->middleware(['auth', 'verified']);

//  upcoming vaccine status 

Route::get('upcoming_vaccine_status/fetch', [Adminupcoming_vaccinestatusController::class, 'index'])
    ->name('upcoming_vaccine_status_index')
    ->middleware(['auth', 'verified']);

/*
|--------------------------------------------------------------------------
| Bookings
|--------------------------------------------------------------------------
*/

Route::get('/bookings/fetch', [AdminBookingController::class, 'index'])
    ->name('bookings/index')
    ->middleware(['auth', 'verified']);


/*
|--------------------------------------------------------------------------
| Notifications
|--------------------------------------------------------------------------
*/

Route::get('/notifications', [AdminNotificationController::class, 'index'])
    ->name('notifications')
    ->middleware(['auth', 'verified']);

















// hospital


Route::post('hospitals/store', [AdminHospitalController::class, 'store'])
    ->name('hospitals.store')
    ->middleware(['auth', 'verified']);

Route::get('hospitals/edit/{hospital}', [AdminHospitalController::class, 'edit'])
    ->name('hospitals.edit')
    ->middleware(['auth', 'verified']);

Route::put('hospitals/update/{hospital}', [AdminHospitalController::class, 'update'])
    ->name('hospitals.update')
    ->middleware(['auth', 'verified']);

Route::delete('hospitals/delete/{hospital}', [AdminHospitalController::class, 'destroy'])
    ->name('hospitals.destroy')
    ->middleware(['auth', 'verified']);


/*
|--------------------------------------------------------------------------
| Parent
|--------------------------------------------------------------------------
*/

Route::prefix('parent')
    ->name('parent.')
    ->middleware(['auth', 'verified'])
    ->group(function () {

        Route::get('/dashboard', [ParentDashboardController::class, 'index'])
            ->name('dashboard');

        Route::get('/bookings', [ParentBookingController::class, 'index'])
            ->name('bookings');

        Route::get('/vaccination-records', [ParentVaccinationController::class, 'index'])
            ->name('vaccination-records');

        Route::get('/notifications', [ParentNotificationController::class, 'index'])
            ->name('notifications');
    });


/*
|--------------------------------------------------------------------------
| Vaccine
|--------------------------------------------------------------------------
*/

// Fetch / Listing
Route::get('/vaccine_managemnet/index', [AdminVaccineController::class, 'index'])
    ->name('vaccines.index')
    ->middleware(['auth', 'verified']);

Route::get('/vaccine_managemnet/add', [AdminVaccineController::class, 'create'])
    ->name('vaccines.add')
    ->middleware(['auth', 'verified']);

Route::post('/vaccine_managemnet/store', [AdminVaccineController::class, 'store'])
    ->name('vaccines.store')
    ->middleware(['auth', 'verified']);


// EDIT
Route::get('/vaccine_managemnet/{vaccine}/edit', [AdminVaccineController::class, 'edit'])
    ->name('vaccines.edit')
    ->middleware(['auth', 'verified']);


// UPDATE
Route::post('/vaccine_managemnet/{vaccine}', [AdminVaccineController::class, 'update'])
    ->name('vaccines.update')
    ->middleware(['auth', 'verified']);


// DELETE
Route::delete('/vaccine_managemnet/{vaccine}', [AdminVaccineController::class, 'destroy'])
    ->name('vaccines.destroy')
    ->middleware(['auth', 'verified']);


    Route::post('Vaccination_status/{vaccine}/update', [AdminVaccination_statusController::class, 'updateStatus'])
    ->name('vaccine_status.update')
    ->middleware(['auth', 'verified']);


    Route::get('/upcoming_vaccine/index', [AdminUpcomingVaccineController::class, 'index'])
    ->name('upcoming_index')
    ->middleware(['auth', 'verified']);






    Route::post('vaccination_reports/store', [AdminVaccination_reportController::class, 'store'])
    ->name('vaccin_report_store')
    ->middleware(['auth', 'verified']);

Route::get('vaccination_reports/{vaccinationRecord}/edit', [AdminVaccination_reportController::class, 'edit'])
    ->name('vaccin_report_edit')
    ->middleware(['auth', 'verified']);

Route::put('vaccination_reports/{vaccinationRecord}', [AdminVaccination_reportController::class, 'update'])
    ->name('vaccin_report_update')
    ->middleware(['auth', 'verified']);

Route::delete('vaccination_reports/{vaccinationRecord}', [AdminVaccination_reportController::class, 'destroy'])
    ->name('vaccin_report_destroy')
    ->middleware(['auth', 'verified']);
/*
|--------------------------------------------------------------------------
| Public Website
|--------------------------------------------------------------------------
*/

Route::get('/', [WebsiteController::class, 'index'])
    ->name('Website_index');

Route::get('/about', [WebsiteController::class, 'about'])
    ->name('Website_about');
    
Route::get('/hospital', [WebsiteController::class, 'hospital'])
    ->name('Website_hospital');

Route::get('/vaccination', [VaccinationController::class, 'vaccination'])
    ->name('Website_vaccination');

Route::get('/contact', [ContactController::class, 'contact'])
    ->name('Website_contact');







    
/*
|--------------------------------------------------------------------------
| Breeze Authentication Routes
|--------------------------------------------------------------------------
*/

require __DIR__ . '/auth.php';