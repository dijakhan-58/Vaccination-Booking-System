<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Hospital;
use App\Models\Vaccine;
use App\Models\Child;
use App\Models\Booking;
use App\Models\Inventory;
use App\Models\VaccinationRecord;
use App\Models\Certificate;
use App\Models\Notification;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Roles
        |--------------------------------------------------------------------------
        */

        $adminRole = Role::firstOrCreate([
            'name' => 'Admin',
            'guard_name' => 'web',
        ]);

        $hospitalRole = Role::firstOrCreate([
            'name' => 'Hospital',
            'guard_name' => 'web',
        ]);

        $parentRole = Role::firstOrCreate([
            'name' => 'Parent',
            'guard_name' => 'web',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Admin
        |--------------------------------------------------------------------------
        */

        $admin = User::create([
            'name' => 'System Administrator',
            'email' => 'admin@vaccination.test',
            'password' => Hash::make('password'),
            'phone' => '03001234567',
            'city' => 'Karachi',
            'email_verified_at' => now(),
        ]);

        $admin->assignRole($adminRole);


        /*
        |--------------------------------------------------------------------------
        | Hospital Users
        |--------------------------------------------------------------------------
        */

        $hospitalUser = User::create([
            'name' => 'Aga Khan Hospital',
            'email' => 'hospital@vaccination.test',
            'password' => Hash::make('password'),
            'phone' => '03001111111',
            'city' => 'Karachi',
            'email_verified_at' => now(),
        ]);

        $hospitalUser->assignRole($hospitalRole);


        /*
        |--------------------------------------------------------------------------
        | Parent User
        |--------------------------------------------------------------------------
        */

        $parent = User::create([
            'name' => 'Ali Ahmed',
            'email' => 'parent@vaccination.test',
            'password' => Hash::make('password'),
            'phone' => '03002222222',
            'cnic' => '42101-1234567-1',
            'city' => 'Karachi',
            'email_verified_at' => now(),
        ]);

        $parent->assignRole($parentRole);


        /*
        |--------------------------------------------------------------------------
        | Hospitals
        |--------------------------------------------------------------------------
        */

        $hospital = Hospital::create([
            'name' => 'Aga Khan Hospital',
            'email' => 'info@agakhan.test',
            'password' => Hash::make('password'),
            'address' => 'Stadium Road',
            'city' => 'Karachi',
            'status' => 'active',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Vaccines
        |--------------------------------------------------------------------------
        */

        $bcg = Vaccine::create([
            'name' => 'BCG',
            'disease' => 'Tuberculosis',
            'description' => 'BCG vaccine for tuberculosis prevention',
            'dose_count' => 1,
            'manufacturer' => 'Local Pharma',
            'recommended_age_days' => 0,
            'availability_status' => 'available',
        ]);

        $polio = Vaccine::create([
            'name' => 'Polio',
            'disease' => 'Poliomyelitis',
            'description' => 'Polio vaccine for children',
            'dose_count' => 4,
            'manufacturer' => 'WHO',
            'recommended_age_days' => 42,
            'availability_status' => 'available',
        ]);

        $measles = Vaccine::create([
            'name' => 'Measles',
            'disease' => 'Measles',
            'description' => 'Measles prevention vaccine',
            'dose_count' => 2,
            'manufacturer' => 'Local Pharma',
            'recommended_age_days' => 270,
            'availability_status' => 'available',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Child
        |--------------------------------------------------------------------------
        */

        $child = Child::create([
            'parent_id' => $parent->id,
            'first_name' => 'Ahmed',
            'last_name' => 'Ali',
            'dob' => '2025-01-15',
            'gender' => 'Male',
            'blood_group' => 'O+',
            'b_form_number' => '42101-1234567-3',
            'weight' => 8.5,
            'medical_notes' => 'Healthy child',
            'allergy_notes' => 'No known allergies',
        ]);


  

        /*
        |--------------------------------------------------------------------------
        | Booking
        |--------------------------------------------------------------------------
        */

        $booking = Booking::create([
            'child_id' => $child->id,
            'hospital_id' => $hospital->id,
            'vaccine_id' => $bcg->id,
            'created_by' => $parent->id,
            'approved_by' => $admin->id,
            'booking_number' => 'BK-10001',
            'preferred_date' => now()->addDays(3)->toDateString(),
            'appointment_time' => '10:00:00',
            'reason' => 'Routine vaccination',
            'status' => 'approved',
            'approved_at' => now(),
        ]);


        /*
        |--------------------------------------------------------------------------
        | Vaccination Record
        |--------------------------------------------------------------------------
        */

        $record = VaccinationRecord::create([
            'booking_id' => $booking->id,
            'administered_by' => $admin->id,
            'vaccination_date' => now()->toDateString(),
            'dose_number' => 1,
            'next_dose_date' => now()->addMonths(1)->toDateString(),
            'side_effects' => 'None',
            'status' => 'completed',
            'remarks' => 'Vaccination successfully administered',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Certificate
        |--------------------------------------------------------------------------
        */

        Certificate::create([
            'vaccination_id' => $record->id,
            'certificate_number' => 'CERT-10001',
            'qr_code' => 'CERT-10001',
            'generated_at' => now(),
        ]);


        /*
        |--------------------------------------------------------------------------
        | Notification
        |--------------------------------------------------------------------------
        */

        Notification::create([
            'parent_id' => $parent->id,
            'title' => 'Vaccination Approved',
            'message' => 'Your child vaccination booking has been approved.',
            'status' => 'unread',
        ]);
    }
}