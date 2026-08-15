<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Vaccination_statusController extends Controller
{
    public function index(){
        return view('dashboard.vaccination_status.fetch');
    }
}
