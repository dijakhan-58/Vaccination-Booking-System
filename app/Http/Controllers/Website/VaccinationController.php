<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class VaccinationController extends Controller
{
    public function vaccination()
    {
        return view('front_theme.vaccination');
    }

    public function show($id)
    {
        // fetch the vaccine by $id and pass it to the view
        return view('front_theme.view_vaccine_schedule', compact('id'));
    }

    public function store($id)
    {
        // handle the booking submission for vaccine $id
        return redirect()->route('vaccine.show', $id)->with('success', 'Booking submitted.');
    }
}