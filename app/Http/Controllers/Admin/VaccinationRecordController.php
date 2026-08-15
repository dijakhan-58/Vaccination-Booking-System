<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\VaccinationRecord;
use Illuminate\Http\Request;

class VaccinationRecordController extends Controller
{
    public function index()
    {
        $records = VaccinationRecord::with([
            'booking.child',
            'booking.vaccine'
        ])->latest()->get();

        return view('admin.vaccination-records.index', compact('records'));
    }

    public function show(VaccinationRecord $vaccinationRecord)
    {
        $vaccinationRecord->load('booking.child');

        return view(
            'admin.vaccination-records.show',
            compact('vaccinationRecord')
        );
    }

    public function create(Booking $booking)
    {
        return view(
            'admin.vaccination-records.create',
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
            'administered_by' => auth()->id(),
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
            ->route('admin.vaccination-records.index')
            ->with('success', 'Vaccination record created.');
    }

    public function edit(VaccinationRecord $vaccinationRecord)
    {
        return view(
            'admin.vaccination-records.edit',
            compact('vaccinationRecord')
        );
    }

    public function update(
        Request $request,
        VaccinationRecord $vaccinationRecord
    ) {
        $vaccinationRecord->update($request->all());

        return redirect()
            ->route('admin.vaccination-records.index')
            ->with('success', 'Record updated.');
    }
}