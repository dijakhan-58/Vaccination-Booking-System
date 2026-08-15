<?php

namespace App\Http\Controllers\ParentPortal;

use App\Http\Controllers\Controller;
use App\Models\VaccinationRecord;

class ParentVaccinationController extends Controller
{
    public function index()
    {
        $records = VaccinationRecord::with([
            'booking.child',
            'booking.vaccine'
        ])->whereHas('booking', function ($query) {
            $query->where('created_by', auth()->id());
        })->latest()->get();

        return view(
            'parent.vaccination-records.index',
            compact('records')
        );
    }

    public function show(VaccinationRecord $vaccinationRecord)
    {
        return view(
            'parent.vaccination-records.show',
            compact('vaccinationRecord')
        );
    }
}