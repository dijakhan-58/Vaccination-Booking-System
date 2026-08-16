<?php

namespace App\Http\Controllers\ParentPortal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParentBookingController extends Controller
{
    public function create()
    {

        return view('front_theme.appointment');
    }
    public function index()
    {

        return view('front_theme.view_appointment');
    }
}
