<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VaccinationRecord;

class UpcomingVaccineController extends Controller
{
    public function index()
    {
        $upcoming = VaccinationRecord::with(['booking.child', 'booking.vaccine', 'booking.hospital'])
            ->whereNotNull('next_dose_date')
            ->orderBy('next_dose_date')
            ->get();

        return view('dashboard.upcoming_vaccine.index', compact('upcoming'));
    }
 
    
}

// class UpcomingVaccineController extends Controller
// {
//     public function index()
//     {
//         $vaccines = Vaccine::latest()->get();

//         return view('dashboard.upcoming_vaccine.index', compact('vaccines'));
//         }
//         }