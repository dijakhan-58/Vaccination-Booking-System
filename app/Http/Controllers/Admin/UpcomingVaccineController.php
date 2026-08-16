<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vaccine;

class UpcomingVaccineController extends Controller
{
    public function index()
    {
        $vaccines = Vaccine::latest()->get();

        return view('dashboard.upcoming_vaccine.index', compact('vaccines'));
    }
}