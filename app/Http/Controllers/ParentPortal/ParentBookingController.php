<?php

namespace App\Http\Controllers\ParentPortal;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Child;
use App\Models\Hospital;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class ParentBookingController extends Controller
{
    // 1. Appointment form show
    public function create()
    {
        $children = Child::where('parent_id', auth()->id())->get();
        $hospitals = Hospital::where('status', 'active')->get();
        $vaccines = Vaccine::all();

        return view('front_theme.appointment.appointment', compact(
            'children',
            'hospitals',
            'vaccines'
        ));
    }


    // 2. Appointment save
    public function store(Request $request)
    {
        $request->validate([
            'child_id' => 'required|exists:children,id',
            'hospital_id' => 'required|exists:hospitals,id',
            'vaccine_id' => 'required|exists:vaccines,id',
            'preferred_date' => 'required|date|after_or_equal:today',
            'appointment_time' => 'nullable',
            'reason' => 'nullable|string|max:255',
        ]);

        Booking::create([
            'child_id' => $request->child_id,
            'hospital_id' => $request->hospital_id,
            'vaccine_id' => $request->vaccine_id,
            'created_by' => auth()->id(),
            'booking_number' => 'BK-' . strtoupper(uniqid()),
            'preferred_date' => $request->preferred_date,
            'appointment_time' => $request->appointment_time,
            'reason' => $request->reason,
            'status' => 'pending',
        ]);

        return redirect()
            ->route('parent.viewAppointment')
            ->with('success', 'Appointment booked successfully.');
    }


    // 3. All appointments show
    public function index()
    {
        $appointments = Booking::with(['child', 'hospital', 'vaccine'])
            ->where('created_by', auth()->id())
            ->latest()
            ->get();

        return view(
            'front_theme.appointment.view_appointment',
            compact('appointments')
        );
    }


    // 4. Edit form
    public function edit(Booking $appointment)
    {
        // Security: sirf apni booking edit kar sake
        abort_unless($appointment->created_by === auth()->id(), 403);

        $children = Child::where('parent_id', auth()->id())->get();
        $hospitals = Hospital::where('status', 'active')->get();
        $vaccines = Vaccine::all();

        return view(
            'front_theme.edit_appointment',
            compact(
                'appointment',
                'children',
                'hospitals',
                'vaccines'
            )
        );
    }


    // 5. Update appointment
    public function update(Request $request, Booking $appointment)
    {
        abort_unless($appointment->created_by === auth()->id(), 403);

        $request->validate([
            'child_id' => 'required|exists:children,id',
            'hospital_id' => 'required|exists:hospitals,id',
            'vaccine_id' => 'required|exists:vaccines,id',
            'preferred_date' => 'required|date|after_or_equal:today',
            'appointment_time' => 'nullable',
            'reason' => 'nullable|string|max:255',
        ]);

        $appointment->update([
            'child_id' => $request->child_id,
            'hospital_id' => $request->hospital_id,
            'vaccine_id' => $request->vaccine_id,
            'preferred_date' => $request->preferred_date,
            'appointment_time' => $request->appointment_time,
            'reason' => $request->reason,
        ]);

        return redirect()
            ->route('parent.viewAppointment')
            ->with('success', 'Appointment updated successfully.');
    }


    // 6. Delete appointment
    public function destroy(Booking $appointment)
    {
        abort_unless($appointment->created_by === auth()->id(), 403);

        $appointment->delete();

        return redirect()
            ->route('parent.viewAppointment')
            ->with('success', 'Appointment cancelled successfully.');
    }
}