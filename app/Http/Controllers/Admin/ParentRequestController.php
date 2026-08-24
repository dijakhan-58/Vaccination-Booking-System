<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParentRequestController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['child.parent', 'hospital', 'vaccine'])
            ->where('status', 'pending')
            ->latest()
            ->get();

        $pendingCount = $bookings->count();

        return view('dashboard.parent-requests.fetch', compact('bookings', 'pendingCount'));
    }

    public function approve(Booking $booking)
    {
       
        if (!Auth::check()) {
            return back()->with('error', 'Unauthorized action. Please log in.');
        }

        $booking->update([
            'status'      => 'approved',
            'approved_by' => Auth::id(),
            'approved_at' => now(),
        ]);

        return back()->with('success', 'Request approved successfully.');
    }

    public function reject(Booking $booking)
    {
        
        if (!Auth::check()) {
            return back()->with('error', 'Unauthorized action. Please log in.');
        }

        $booking->update([
            'status'      => 'cancelled',
            'approved_by' => Auth::id(),
            'approved_at' => now(),
        ]);

        return back()->with('success', 'Request rejected successfully.');
    }
}