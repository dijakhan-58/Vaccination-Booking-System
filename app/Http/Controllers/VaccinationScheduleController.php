<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VaccinationScheduleController extends Controller
{
      public function today()    { return view('vaccination-schedule.today'); }
    public function upcoming() { return view('vaccination-schedule.upcoming'); }
    public function calendar() { return view('vaccination-schedule.calendar'); }
}