<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        // Replace with real queries once your models exist, e.g.:
        // $totalChildren = Child::count();
        // $todaysVaccinations = Booking::whereDate('scheduled_at', today())->count();
        // $pendingRequests = ParentRequest::where('status', 'pending')->count();
        // $activeHospitals = Hospital::where('is_active', true)->count();

        return view('dashboard.index', [
            'totalChildren' => 0,
            'todaysVaccinations' => 0,
            'pendingRequests' => 0,
            'activeHospitals' => 0,
        ]);
    }
}