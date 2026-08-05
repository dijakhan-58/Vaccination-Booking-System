<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
     public function child()       { return view('reports.child'); }
    public function vaccination() { return view('reports.vaccination'); }
    public function datewise()    { return view('reports.datewise'); }
}