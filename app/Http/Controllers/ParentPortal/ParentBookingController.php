<?php

namespace App\Http\Controllers\ParentPortal;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Child;
use App\Models\Hospital;
use App\Models\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParentBookingController extends Controller
{
    public function create()
    {
        $children = Child::where('parent_id', Auth::id())->get();
        $hospitals = Hospital::where('status', 'active')->get();
        $vaccines = Vaccine::all();

        return view('front_theme.appointment.appointment', compact(
            'children',
            'hospitals',
            'vaccines'
        ));
    }

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
            'created_by' => Auth::id(),
            'booking_number' => 'BK-'.strtoupper(uniqid()),
            'preferred_date' => $request->preferred_date,
            'appointment_time' => $request->appointment_time,
            'reason' => $request->reason,
            'status' => 'pending',
        ]);

        return redirect()
            ->route('parent.viewAppointment')
            ->with('success', 'Appointment booked successfully.');
    }

    public function index()
    {
        $appointments = Booking::with(['child', 'hospital', 'vaccine'])
            ->where('created_by', Auth::id())
            ->latest()
            ->get();

        return view(
            'front_theme.appointment.view_appointment',
            compact('appointments')
        );
    }

    public function edit(Booking $appointment)
    {
        abort_unless($appointment->created_by === Auth::id(), 403);

        $children = Child::where('parent_id', Auth::id())->get();
        $hospitals = Hospital::where('status', 'active')->get();
        $vaccines = Vaccine::all();

        // Was 'front_theme.edit_appointment' — missing the 'appointment.'
        // folder segment used by every other view in this controller,
        // which is what caused the view-not-found error.
        return view(
            'front_theme.appointment.edit_appointment',
            compact(
                'appointment',
                'children',
                'hospitals',
                'vaccines'
            )
        );
    }

    public function update(Request $request, Booking $appointment)
    {
        abort_unless($appointment->created_by === Auth::id(), 403);

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

    public function destroy(Booking $appointment)
    {
        abort_unless($appointment->created_by === Auth::id(), 403);

        $appointment->delete();

        return redirect()
            ->route('parent.viewAppointment')
            ->with('success', 'Appointment cancelled successfully.');
    }
}