<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hospital;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('front_theme.index');
    }

    public function about()
    {
        return view('front_theme.about');
    }

    public function hospital(Request $request)
    {
        $hospitals = Hospital::where('status', 'active')
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->string('search');
                $query->where(function ($inner) use ($search) {
                    $inner->where('name', 'like', "%{$search}%")
                        ->orWhere('city', 'like', "%{$search}%")
                        ->orWhere('address', 'like', "%{$search}%");
                });
            })
            ->when($request->filled('city'), function ($query) use ($request) {
                $query->where('city', $request->string('city'));
            })
            ->latest()
            ->get();

        $cities = Hospital::where('status', 'active')->pluck('city')->unique();

        return view('front_theme.hospital', compact('hospitals', 'cities'));
    }
}