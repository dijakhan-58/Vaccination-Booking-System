<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VaccineController extends Controller
{
     public function index()        { return view('vaccines.index'); }
    public function availability() { return view('vaccines.availability'); }
    public function inventory()    { return view('vaccines.inventory'); }
}