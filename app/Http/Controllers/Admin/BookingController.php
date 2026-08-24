<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Child;
use App\Models\Hospital;
use App\Models\Vaccine;
use App\Models\VaccinationRecord;
use App\Models\AppointmentNotification;
use App\Models\AppointmentNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['child', 'hospital', 'vaccine'])
            ->latest()
            ->get();

        return view('dashboard.bookings.fetch', compact('bookings'));
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
            'created_by' => Auth::id(),
            'booking_number' => 'BK-' . time(),
            'preferred_date' => $request->preferred_date,
            'appointment_time' => $request->appointment_time,
            'reason' => $request->reason,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('bookings.index')
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

        $check_status = $booking->status !== $request->status;
        $booking->update($request->only([
            'child_id',
            'hospital_id',
            'vaccine_id',
            'preferred_date',
            'appointment_time',
            'reason',
            'status',
        ]));
        if ($check_status) {
            $user = $booking->creator;
            if ($user) {
                AppointmentNotification::create([
                    'type' => "App\Models\AppointmentNotification",
                    'notifiable_type' => "App\Models\AppointmentNotification",
                    'user_id_fk' => $user->id,
                    'data' => 'Your appointment status has been changed to ' . $booking->status,
                    // 'booking_id' => $booking->id,
                    // 'status' => $booking->status,
                ]);
                // $user->notify(
                //     new AppointmentNotify($booking)
                // );
            }
        }


        return redirect()
            ->route('bookings.index')
            ->with('success', 'Booking updated successfully.');
    }

    public function approve(Booking $booking)
    {
        $booking->update([
            'status' => 'approved',
            'approved_by' =>Auth::id(),
            'approved_at' => now(),
        ]);

        return back()->with('success', 'Booking approved.');
    }

    public function complete(Booking $booking)
    {
        if ($booking->status !== 'approved') {
            return back()->with('error', 'Only approved bookings can be marked as completed.');
        }

        $booking->update(['status' => 'completed']);

        
        $previousDoses = VaccinationRecord::whereHas('booking', function ($q) use ($booking) {
            $q->where('child_id', $booking->child_id)
                ->where('vaccine_id', $booking->vaccine_id);
        })->count();

        $doseNumber = $previousDoses + 1;

        $vaccine = $booking->vaccine;
        $nextDoseDate = null;

        if ($doseNumber < $vaccine->dose_count && $vaccine->dose_interval_days) {
            $nextDoseDate = now()->addDays($vaccine->dose_interval_days);
        }

        VaccinationRecord::create([
            'booking_id' => $booking->id,
            'administered_by' => Auth::id(),
            'vaccination_date' => now(),
            'dose_number' => $doseNumber,
            'next_dose_date' => $nextDoseDate,
            'status' => 'completed',
        ]);

        return back()->with('success', 'Booking marked as completed and vaccination record created.');
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
            ->route('bookings.index')
            ->with('success', 'Booking deleted successfully.');
    }
}