<?php

namespace App\Http\Controllers\ParentPortal;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Child;
use App\Models\Hospital;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class ParentDashboardController extends Controller
{
    public function index()
    {
        $bookings = Booking::with([
            'child',
            'hospital',
            'vaccine'
        ])
        ->where('created_by', auth()->id())
        ->latest()
        ->get();

        return view('parent.bookings.index', compact('bookings'));
    }

    public function create()
    {
        $children = Child::where(
            'parent_id',
            auth()->id()
        )->get();

        $hospitals = Hospital::where(
            'status',
            'active'
        )->get();

        $vaccines = Vaccine::where(
            'availability_status',
            'available'
        )->get();

        return view(
            'parent.bookings.create',
            compact('children', 'hospitals', 'vaccines')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'child_id' => 'required',
            'hospital_id' => 'required',
            'vaccine_id' => 'required',
            'preferred_date' => 'required|date',
            'appointment_time' => 'required',
        ]);

        Booking::create([
            'child_id' => $request->child_id,
            'hospital_id' => $request->hospital_id,
            'vaccine_id' => $request->vaccine_id,
            'created_by' => auth()->id(),
            'booking_number' => 'BK-' . time(),
            'preferred_date' => $request->preferred_date,
            'appointment_time' => $request->appointment_time,
            'reason' => $request->reason,
            'status' => 'pending',
        ]);

        return redirect()
            ->route('parent.bookings.index')
            ->with('success', 'Booking request submitted.');
    }

    public function show(Booking $booking)
    {
        return view('parent.bookings.show', compact('booking'));
    }

    public function cancel(Booking $booking)
    {
        $booking->update([
            'status' => 'cancelled',
        ]);

        return back()->with('success', 'Booking cancelled.');
    }
}