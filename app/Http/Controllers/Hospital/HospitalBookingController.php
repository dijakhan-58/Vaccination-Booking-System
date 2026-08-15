<?php

namespace App\Http\Controllers\Hospital;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Booking;

class HospitalBookingController extends Controller
{
    public function index()
    {
        $hospitalId = Auth::user()->hospital_id;

        $bookings = Booking::with(['child', 'vaccine'])
            ->where('hospital_id', $hospitalId)
            ->latest()
            ->get();

        return view('hospital.bookings.index', compact('bookings'));
    }

    public function show(Booking $booking)
    {
        return view('hospital.bookings.show', compact('booking'));
    }
}