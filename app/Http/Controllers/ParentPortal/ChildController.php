<?php

namespace App\Http\Controllers\ParentPortal;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Child;

class ChildController extends Controller
{

    // public function index()
    // {
    //     $notifications = Notification::where(
    //         'parent_id',
    //       Auth::id()
    //     )->latest()->get();

    //     return view(
    //         'parent.notifications.index',
    //         compact('notifications')
    //     );
    // }

    // public function show(Notification $notification)
    // {
    //     $notification->update([
    //         'status' => 'read',
    //     ]);

    //     return view(
    //         'parent.notifications.show',
    //         compact('notification')
    //     );
    // }

    // public function markAllRead()
    // {
    //     Notification::where(
    //         'parent_id',
    //        Auth::id()
    //     )->update([
    //         'status' => 'read',
    //     ]);

    //     return back();
    // }

public function create(){

  return view('front_theme.addchild');
    }
    public function show()
    {
        // $child = Child::findOrFail($child);

        // return view('front_theme.child-detail', compact('child'));
        return view('front_theme.child_detail');
    }


    }