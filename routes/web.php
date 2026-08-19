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
use App\Http\Controllers\ParentPortal\ParentController;
use App\Http\Controllers\ParentPortal\ChildController;
use App\Http\Controllers\ParentPortal\ParentBookingController;
use App\Http\Controllers\ParentPortal\ParentVaccinationController;
use App\Http\Controllers\ParentPortal\ParentNotificationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

// Website
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Website\VaccinationController;
use App\Http\Controllers\Website\ContactController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Admin Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [AdminDashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware(['auth', 'verified', 'permission:view dashboard']);

/*
|--------------------------------------------------------------------------
| Role Management
|--------------------------------------------------------------------------
*/

Route::get('/role', [RoleController::class, 'index'])
    ->name('role_view')
    ->middleware(['auth', 'verified', 'permission:fetch roles']);

Route::get('/role/create', [RoleController::class, 'create'])
    ->name('role_create')
    ->middleware(['auth', 'verified', 'permission:create role']);

Route::get('/role/edit/{id}', [RoleController::class, 'edit'])
    ->name('role_edit')
    ->middleware(['auth', 'verified', 'permission:edit roles']);

Route::post('/role/create', [RoleController::class, 'store'])
    ->name('role_create_action')
    ->middleware(['auth', 'verified', 'permission:create role']);

Route::put('/role/update/{id}', [RoleController::class, 'update'])
    ->name('role_update_action')
    ->middleware(['auth', 'verified', 'permission:edit roles']);

Route::delete('/role/destroy/{id}', [RoleController::class, 'destroy'])
    ->name('role_delete_action')
    ->middleware(['auth', 'verified', 'permission:delete roles']);

/*
|--------------------------------------------------------------------------
| User Management
|--------------------------------------------------------------------------
*/

Route::get('/user', [UserController::class, 'index'])
    ->name('user_view')
    ->middleware(['auth', 'verified', 'permission:fetch users']);

Route::get('/user/create', [UserController::class, 'create'])
    ->name('user_create')
    ->middleware(['auth', 'verified', 'permission:create user']);

Route::get('/user/edit/{id}', [UserController::class, 'edit'])
    ->name('user_edit')
    ->middleware(['auth', 'verified', 'permission:edit users']);

Route::post('/user/create', [UserController::class, 'store'])
    ->name('user_create_action')
    ->middleware(['auth', 'verified', 'permission:create user']);

Route::put('/user/update/{id}', [UserController::class, 'update'])
    ->name('user_update_action')
    ->middleware(['auth', 'verified', 'permission:edit users']);

Route::delete('/user/destroy/{id}', [UserController::class, 'destroy'])
    ->name('user_delete_action')
    ->middleware(['auth', 'verified', 'permission:delete users']);

/*
|--------------------------------------------------------------------------
| Children
|--------------------------------------------------------------------------
*/

Route::get('children/fetch', [AdminChildController::class, 'index'])
    ->name('children.index')
    ->middleware(['auth', 'verified', 'permission:fetch children']);

Route::get('children/add', [AdminChildController::class, 'create'])
    ->name('children.add')
    ->middleware(['auth', 'verified', 'permission:create children']);

Route::post('children/store', [AdminChildController::class, 'store'])
    ->name('children.store')
    ->middleware(['auth', 'verified', 'permission:create children']);

Route::get('children/edit/{child}', [AdminChildController::class, 'edit'])
    ->name('children.edit')
    ->middleware(['auth', 'verified', 'permission:edit children']);

Route::put('children/update/{child}', [AdminChildController::class, 'update'])
    ->name('children.update')
    ->middleware(['auth', 'verified', 'permission:edit children']);

Route::delete('children/delete/{child}', [AdminChildController::class, 'destroy'])
    ->name('children.destroy')
    ->middleware(['auth', 'verified', 'permission:delete children']);

/*
|--------------------------------------------------------------------------
| Vaccine Management
|--------------------------------------------------------------------------
*/

Route::get('/vaccine_managemnet/index', [AdminVaccineController::class, 'index'])
    ->name('vaccines.index')
    ->middleware(['auth', 'verified', 'permission:fetch vaccines']);

Route::get('/vaccine_managemnet/add', [AdminVaccineController::class, 'create'])
    ->name('vaccines.add')
    ->middleware(['auth', 'verified', 'permission:create vaccines']);

Route::post('/vaccine_managemnet/store', [AdminVaccineController::class, 'store'])
    ->name('vaccines.store')
    ->middleware(['auth', 'verified', 'permission:create vaccines']);

Route::get('/vaccine_managemnet/{vaccine}/edit', [AdminVaccineController::class, 'edit'])
    ->name('vaccines.edit')
    ->middleware(['auth', 'verified', 'permission:edit vaccines']);

Route::post('/vaccine_managemnet/{vaccine}', [AdminVaccineController::class, 'update'])
    ->name('vaccines.update')
    ->middleware(['auth', 'verified', 'permission:edit vaccines']);

Route::delete('/vaccine_managemnet/{vaccine}', [AdminVaccineController::class, 'destroy'])
    ->name('vaccines.destroy')
    ->middleware(['auth', 'verified', 'permission:delete vaccines']);

/*
|--------------------------------------------------------------------------
| Upcoming Vaccine
|--------------------------------------------------------------------------
*/

Route::get('/upcoming_vaccine/index', [AdminUpcomingVaccineController::class, 'index'])
    ->name('upcoming_index')
    ->middleware(['auth', 'verified', 'permission:upcomming vaccines view']);

/*
|--------------------------------------------------------------------------
| Vaccination Report
|--------------------------------------------------------------------------
*/

Route::get('vaccination_reports/index', [AdminVaccination_reportController::class, 'index'])
    ->name('vaccin_report_index')
    ->middleware(['auth', 'verified']);

Route::get('vaccination_reports/add', [AdminVaccination_reportController::class, 'create'])
    ->name('vaccin_report_add')
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

Route::get('/vaccination-report/pdf', [AdminVaccination_reportController::class, 'exportPdf'])
    ->name('vaccin_report_pdf')
    ->middleware(['auth', 'verified']);

Route::get('vaccination-report/{vaccinationRecord}/pdf', [AdminVaccination_reportController::class, 'exportSinglePdf'])
    ->name('vaccin_report_single_pdf')
    ->middleware(['auth', 'verified']);

/*
|--------------------------------------------------------------------------
| Vaccination Status
|--------------------------------------------------------------------------
*/

Route::get('Vaccination_status/fetch', [AdminVaccination_statusController::class, 'index'])
    ->name('vaccine_status_index')
    ->middleware(['auth', 'verified', 'permission:vaccination status view']);

Route::post('Vaccination_status/{vaccine}/update', [AdminVaccination_statusController::class, 'updateStatus'])
    ->name('vaccine_status.update')
    ->middleware(['auth', 'verified', 'permission:vaccination status edit']);

/*
|--------------------------------------------------------------------------
| Parent Appointment Request (Admin side)
|--------------------------------------------------------------------------
*/

Route::get('parent-request/fetch', [AdminParentRequestController::class, 'index'])
    ->name('parent_index')
    ->middleware(['auth', 'verified', 'permission:parent appointment request view']);

Route::post('parent-request/{booking}/approve', [AdminParentRequestController::class, 'approve'])
    ->name('parent_request.approve')
    ->middleware(['auth', 'verified', 'permission:parent appointment request edit']);

Route::post('parent-request/{booking}/reject', [AdminParentRequestController::class, 'reject'])
    ->name('parent_request.reject')
    ->middleware(['auth', 'verified', 'permission:parent appointment request edit']);

/*
|--------------------------------------------------------------------------
| Upcoming Vaccine Status
|--------------------------------------------------------------------------
*/

Route::get('upcoming_vaccine_status/fetch', [Adminupcoming_vaccinestatusController::class, 'index'])
    ->name('upcoming_vaccine_status_index')
    ->middleware(['auth', 'verified', 'permission:upcomming vaccination status']);

/*
|--------------------------------------------------------------------------
| Booking (Admin side)
|--------------------------------------------------------------------------
*/

Route::get('/bookings/fetch', [AdminBookingController::class, 'index'])
    ->name('bookings.index')
    ->middleware(['auth', 'verified']);

Route::get('/bookings/add', [AdminBookingController::class, 'create'])
    ->name('bookings.add')
    ->middleware(['auth', 'verified']);

Route::post('/bookings/store', [AdminBookingController::class, 'store'])
    ->name('bookings.store')
    ->middleware(['auth', 'verified']);

Route::get('/bookings/edit/{booking}', [AdminBookingController::class, 'edit'])
    ->name('bookings.edit')
    ->middleware(['auth', 'verified']);

Route::put('/bookings/update/{booking}', [AdminBookingController::class, 'update'])
    ->name('bookings.update')
    ->middleware(['auth', 'verified']);

Route::delete('/bookings/delete/{booking}', [AdminBookingController::class, 'destroy'])
    ->name('bookings.destroy')
    ->middleware(['auth', 'verified']);

Route::post('/bookings/{booking}/complete', [AdminBookingController::class, 'complete'])
    ->name('bookings.complete')
    ->middleware(['auth', 'verified']);

/*
|--------------------------------------------------------------------------
| Notifications
|--------------------------------------------------------------------------
*/

Route::get('/notifications', [AdminNotificationController::class, 'index'])
    ->name('notifications')
    ->middleware(['auth', 'verified']);

/*
|--------------------------------------------------------------------------
| Hospital Management
|--------------------------------------------------------------------------
*/

Route::get('hospitals/fetch', [AdminHospitalController::class, 'index'])
    ->name('hospitals.fetch')
    ->middleware(['auth', 'verified', 'permission:fetch hospitals']);

Route::get('hospitals/add', [AdminHospitalController::class, 'create'])
    ->name('hospitals.add')
    ->middleware(['auth', 'verified', 'permission:create hospital']);

Route::post('hospitals/store', [AdminHospitalController::class, 'store'])
    ->name('hospitals.store')
    ->middleware(['auth', 'verified', 'permission:create hospital']);

Route::get('hospitals/edit/{hospital}', [AdminHospitalController::class, 'edit'])
    ->name('hospitals.edit')
    ->middleware(['auth', 'verified', 'permission:edit hospitals']);

Route::put('hospitals/update/{hospital}', [AdminHospitalController::class, 'update'])
    ->name('hospitals.update')
    ->middleware(['auth', 'verified', 'permission:edit hospitals']);

Route::delete('hospitals/delete/{hospital}', [AdminHospitalController::class, 'destroy'])
    ->name('hospitals.destroy')
    ->middleware(['auth', 'verified', 'permission:delete hospitals']);

/*
|--------------------------------------------------------------------------
| Parent Portal (Frontend, logged-in parents only)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:user'])->group(function () {

    // Profile
    Route::get('/parent/profile', [ParentController::class, 'profile'])
        ->name('parent.profile');

    // Children
    Route::get('/parent/add-child', [ChildController::class, 'create'])
        ->name('parent.addChild');

    Route::post('/parent/add-child', [ChildController::class, 'store'])
        ->name('parent.addChild.store');

    Route::get('/parent/child-detail', [ChildController::class, 'show'])
        ->name('parent.childDetail');

    Route::get('/parent/view-record/{child}', [ChildController::class, 'viewRecord'])
        ->name('parent.viewRecord');

    Route::get('/parent/edit-child/{child}', [ChildController::class, 'edit'])
        ->name('parent.editChild');

    Route::put('/parent/edit-child/{child}', [ChildController::class, 'update'])
        ->name('parent.editChild.update');

    Route::delete('/parent/delete-child/{child}', [ChildController::class, 'destroy'])
        ->name('parent.deleteChild');

    // Appointments
    Route::get('/parent/appointment', [ParentBookingController::class, 'create'])
        ->name('parent.appointment');

    Route::post('/parent/appointment', [ParentBookingController::class, 'store'])
        ->name('parent.appointment.store');

    Route::get('/parent/view-appointment', [ParentBookingController::class, 'index'])
        ->name('parent.viewAppointment');

    Route::get('/parent/edit-appointment/{appointment}', [ParentBookingController::class, 'edit'])
        ->name('parent.editAppointment');

    Route::put('/parent/edit-appointment/{appointment}', [ParentBookingController::class, 'update'])
        ->name('parent.editAppointment.update');

    Route::delete('/parent/cancel-appointment/{appointment}', [ParentBookingController::class, 'destroy'])
        ->name('parent.cancelAppointment');
});

/*
|--------------------------------------------------------------------------
| Public Website
|--------------------------------------------------------------------------
*/
Route::get('/', [WebsiteController::class, 'index'])
    ->name('Website_index');



Route::get('/about', [WebsiteController::class, 'about'])
    ->name('Website_about');

Route::get('/view_vaccine_schedule', [WebsiteController::class, 'view_vaccine_schedule'])
    ->name('vaccine_schedule');


Route::get('/hospital', [WebsiteController::class, 'hospital'])
    ->name('Website_hospital');

Route::get('/vaccination', [VaccinationController::class, 'vaccination'])
    ->name('vaccination');

Route::get('/vaccination/{id}', [VaccinationController::class, 'show'])
    ->name('vaccine.show');

Route::post('/vaccination/{id}/book', [VaccinationController::class, 'store'])
    ->name('vaccine.store');

Route::get('/contact', [ContactController::class, 'contact'])
    ->name('Website_contact');

/*
|--------------------------------------------------------------------------
| Breeze Authentication Routes
|--------------------------------------------------------------------------
*/

require __DIR__ . '/auth.php';