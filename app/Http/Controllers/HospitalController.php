<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index()
    {
        return view('hospitals.index');
    }
    public function create()
    {
        return view('hospitals.create');
    }
    public function store()
    {
        return redirect()->route('hospitals.index');
    }
    public function manage()
    {
        return view('hospitals.manage');
    }
    public function edit($hospital)
    {
        return view('hospitals.edit', compact('hospital'));
    }
    public function update($hospital)
    {
        return redirect()->route('hospitals.manage');
    }
    public function destroy($hospital)
    {
        return redirect()->route('hospitals.manage');
    }
}