<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function index()   { return view('children.index'); }
    public function create()  { return view('children.create'); }
    public function store()   { /* validate + save, then redirect */ return redirect()->route('children.index'); }
    public function profile($child) { return view('children.profile', compact('child')); }
    public function edit($child)    { return view('children.edit', compact('child')); }
    public function update($child)  { return redirect()->route('children.profile', $child); }
    public function destroy($child) { return redirect()->route('children.index'); }
}