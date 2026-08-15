<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class upcoming_vaccinestatusController extends Controller
{
    public function index(){
        return view('dashboard.upcoming_vaccine_status.fetch');
    }
}
