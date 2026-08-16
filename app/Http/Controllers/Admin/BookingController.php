<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Child;
use App\Models\Hospital;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['child', 'hospital', 'vaccine'])
            ->latest()
            ->get();

        return view('dashboard.bookings.fetch', compact('bookings'));
    }

    public function create()
    {
        $children = Child::all();
        $hospitals = Hospital::where('status', 'active')->get();
        $vaccines = Vaccine::all();

        return view('dashboard.bookings.add', compact('children', 'hospitals', 'vaccines'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'child_id' => 'required|exists:children,id',
            'hospital_id' => 'required|exists:hospitals,id',
            'vaccine_id' => 'required|exists:vaccines,id',
            'preferred_date' => 'required|date',
            'appointment_time' => 'nullable',
            'reason' => 'nullable|string|max:255',
            'status' => 'required|in:pending,approved,completed,cancelled',
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
            'status' => $request->status,
        ]);

        return redirect()
            ->route('bookings/index')
            ->with('success', 'Booking created successfully.');
    }

    public function edit(Booking $booking)
    {
        $children = Child::all();
        $hospitals = Hospital::where('status', 'active')->get();
        $vaccines = Vaccine::all();

        return view('dashboard.bookings.edit', compact('booking', 'children', 'hospitals', 'vaccines'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'child_id' => 'required|exists:children,id',
            'hospital_id' => 'required|exists:hospitals,id',
            'vaccine_id' => 'required|exists:vaccines,id',
            'preferred_date' => 'required|date',
            'appointment_time' => 'nullable',
            'reason' => 'nullable|string|max:255',
            'status' => 'required|in:pending,approved,completed,cancelled',
        ]);

        $booking->update($request->only([
            'child_id',
            'hospital_id',
            'vaccine_id',
            'preferred_date',
            'appointment_time',
            'reason',
            'status',
        ]));

        return redirect()
            ->route('bookings/index')
            ->with('success', 'Booking updated successfully.');
    }

    public function approve(Booking $booking)
    {
        $booking->update([
            'status' => 'approved',
            'approved_by' => auth()->id(),
            'approved_at' => now(),
        ]);

        return back()->with('success', 'Booking approved.');
    }

    public function cancel(Booking $booking)
    {
        $booking->update([
            'status' => 'cancelled',
        ]);

        return back()->with('success', 'Booking cancelled.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()
            ->route('bookings/index')
            ->with('success', 'Booking deleted successfully.');
    }
}