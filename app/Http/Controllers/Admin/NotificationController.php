<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::latest()->get();

        return view('admin.notifications.index', compact('notifications'));
    }

    public function create()
    {
        $parents = User::role('Parent')->get();

        return view('admin.notifications.create', compact('parents'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'parent_id' => 'required',
            'title' => 'required',
            'message' => 'required',
        ]);

        Notification::create([
            'parent_id' => $request->parent_id,
            'title' => $request->title,
            'message' => $request->message,
            'status' => 'unread',
        ]);

        return redirect()
            ->route('admin.notifications.index')
            ->with('success', 'Notification sent.');
    }

    public function show(Notification $notification)
    {
        return view(
            'admin.notifications.show',
            compact('notification')
        );
    }

    public function destroy(Notification $notification)
    {
        $notification->delete();

        return back()->with('success', 'Notification deleted.');
    }
}