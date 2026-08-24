<?php

namespace App\Http\Controllers\ParentPortal;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Child;
use App\Models\Notification;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function profile()
    {
        $user = auth()->user();

        $childrenCount = Child::where('parent_id', $user->id)->count();

        // "Upcoming" = still pending approval or approved but not yet
        // completed — matches the same status logic used elsewhere for
        // this parent's bookings.
        $upcomingCount = Booking::where('created_by', $user->id)
            ->whereIn('status', ['pending', 'approved'])
            ->count();

        $completedCount = Booking::where('created_by', $user->id)
            ->where('status', 'completed')
            ->count();

        $unreadCount = Notification::where('parent_id', $user->id)
            ->where('status', 'unread')
            ->count();

        // Preview list for the dropdown — capped at 5 so the bell menu
        // doesn't grow unbounded; the full list still lives at
        // parent.notifications (index()) in ParentNotificationController.
        $notifications = Notification::where('parent_id', $user->id)
            ->latest()
            ->take(5)
            ->get();

        return view('front_theme.profile', compact(
            'user',
            'childrenCount',
            'upcomingCount',
            'completedCount',
            'unreadCount',
            'notifications'
        ));
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        $user->save();

        return redirect()
            ->route('parent.profile')
            ->with('success', 'Profile updated successfully!');
    }
}