<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VaccineController extends Controller
{
     public function index()        { return view('dashboard/vaccines.index'); }
    public function availability() { return view('dashboard/vaccines.availability'); }
    public function inventory()    { return view('dashboard/vaccines.inventory'); }
}