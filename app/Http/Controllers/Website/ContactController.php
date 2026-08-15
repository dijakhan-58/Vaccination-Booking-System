<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contact()
    {
        return view('front_theme.contact');
    }
}