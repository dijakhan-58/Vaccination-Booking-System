<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function details()   { return view('dashboard.bookings.details'); }
    public function upcoming()  { return view('dashboard.bookings.upcoming'); }
    public function completed() { return view('dashboard.bookings.completed'); }
    public function cancelled() { return view('dashboard.bookings.cancelled'); }
    public function show($booking) { return view('dashboard/bookings.show', compact('booking')); }
}