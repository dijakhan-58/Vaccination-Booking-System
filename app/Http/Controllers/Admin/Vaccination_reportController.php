<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Vaccination_reportController extends Controller
{
    public function index()
    {
        return view('dashboard.vaccination_reports.index');
    }
    public function create()
    {
        return view('dashboard.vaccination_reports.add');
    }

}
