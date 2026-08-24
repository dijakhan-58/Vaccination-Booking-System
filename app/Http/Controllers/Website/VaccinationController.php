<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Vaccine;

class VaccinationController extends Controller
{
    public function vaccination()
    {
        $vaccines = Vaccine::latest()->get();

        return view('front_theme.vaccination', compact('vaccines'));
    }

    public function show($id)
    {
        return view('front_theme.view_vaccine_schedule', compact('id'));
    }

    public function store($id)
    {
        return redirect()
            ->route('vaccine.show', $id)
            ->with('success', 'Booking submitted.');
    }
}