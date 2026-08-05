<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function profile()  { return view('settings.profile'); }
    public function updateProfile()  { return redirect()->route('settings.profile'); }

    public function password() { return view('settings.password'); }
    public function updatePassword() { return redirect()->route('settings.password'); }

    public function system()   { return view('settings.system'); }
    public function updateSystem()   { return redirect()->route('settings.system'); }
}