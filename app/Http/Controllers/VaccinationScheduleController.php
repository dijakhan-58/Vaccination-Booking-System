<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VaccinationScheduleController extends Controller
{
      public function today()    { return view('dashboard/vaccination-schedule.today'); }
    public function upcoming() { return view('dashboard/vaccination-schedule.upcoming'); }
    public function calendar() { return view('dashboard/vaccination-schedule.calendar'); }
}