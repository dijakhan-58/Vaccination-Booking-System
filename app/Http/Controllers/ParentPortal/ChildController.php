<?php

namespace App\Http\Controllers\ParentPortal;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Notification;

class ParentNotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::where(
            'parent_id',
          Auth::id()
        )->latest()->get();

        return view(
            'parent.notifications.index',
            compact('notifications')
        );
    }

    public function show(Notification $notification)
    {
        $notification->update([
            'status' => 'read',
        ]);

        return view(
            'parent.notifications.show',
            compact('notification')
        );
    }

    public function markAllRead()
    {
        Notification::where(
            'parent_id',
           Auth::id()
        )->update([
            'status' => 'read',
        ]);

        return back();
    }
}