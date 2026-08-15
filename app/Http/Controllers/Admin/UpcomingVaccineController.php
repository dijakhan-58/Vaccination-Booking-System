<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpcomingVaccineController extends Controller
{
    public function index(){

        return view ('dashboard.upcoming_vaccine.index');
        }
}
