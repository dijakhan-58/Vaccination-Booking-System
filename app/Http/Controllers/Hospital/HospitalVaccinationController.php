<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\VaccinationRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HospitalVaccinationController extends Controller
{
    public function index()
    {
        $records = VaccinationRecord::with('booking.child')
            ->latest()
            ->get();

        return view('hospital.vaccination-records.index', compact('records'));
    }

    public function create(Booking $booking)
    {
        return view(
            'hospital.vaccination-records.create',
            compact('booking')
        );
    }

    public function store(Request $request, Booking $booking)
    {
        $request->validate([
            'vaccination_date' => 'required|date',
            'dose_number' => 'required|integer',
        ]);

        VaccinationRecord::create([
            'booking_id' => $booking->id,
            'administered_by' => Auth::id(),
            'vaccination_date' => $request->vaccination_date,
            'dose_number' => $request->dose_number,
            'next_dose_date' => $request->next_dose_date,
            'side_effects' => $request->side_effects,
            'status' => 'completed',
            'remarks' => $request->remarks,
        ]);

        $booking->update([
            'status' => 'completed',
        ]);

        return redirect()
            ->route('hospital.vaccination-records.index')
            ->with('success', 'Vaccination recorded.');
    }
}