<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function details()   { return view('bookings.details'); }
    public function upcoming()  { return view('bookings.upcoming'); }
    public function completed() { return view('bookings.completed'); }
    public function cancelled() { return view('bookings.cancelled'); }
    public function show($booking) { return view('bookings.show', compact('booking')); }
}