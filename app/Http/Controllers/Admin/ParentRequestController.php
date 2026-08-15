<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParentRequestController extends Controller
{
    public function index(){
        return view ('dashboard.parent-requests.fetch');
    }
}
