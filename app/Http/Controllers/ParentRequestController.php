<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentRequestController extends Controller
{
    public function pending()
    {
        return view('dashboard.parent-requests.pending');
    }
    public function approved()
    {
        return view('dashboard.parent-requests.approved');
    }
    public function rejected()
    {
        return view('dashboard.parent-requests.rejected');
    }
    public function approve($parentRequest)
    {
        return redirect()->route('parent-requests.pending');
    }
    public function reject($parentRequest)
    {
        return redirect()->route('parent-requests.pending');
    }
}