<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
     public function child()       { return view('dashboard.reports.child'); }
    public function vaccination() { return view('dashboard.reports.vaccination'); }
    public function datewise()    { return view('dashboard.reports.datewise'); }
}