<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hospital;

class WebsiteController extends Controller
{
      public function index(){
        return view('front_theme.index');
    }
    public function about(){
        return view('front_theme.about');
    }
   public function hospital()
    {
        $hospitals = Hospital::where('status', 'active')
            ->latest()
            ->get();

        return view('front_theme.hospital', compact('hospitals'));
    }
}