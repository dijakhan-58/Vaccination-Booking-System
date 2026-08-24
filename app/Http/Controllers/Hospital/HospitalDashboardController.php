<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;

class HospitalDashboardController extends Controller
{
    public function index()
    {
        return view('hospital.dashboard');
    }
} 