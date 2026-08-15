<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
      public function index(){
        return view('front_theme.index');
    }
    public function about(){
        return view('front_theme.about');
    }
    public function hospital(){
        return view('front_theme.hospital');
    }
    // public function vaccine(){
    //     return view('front_theme.vaccine');
    // }
}