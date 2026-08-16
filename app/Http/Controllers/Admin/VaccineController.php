<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vaccine;
use Illuminate\Http\Request;


class VaccineController extends Controller
{
    // FETCH / LISTING
    public function index()
    {
        $vaccines = Vaccine::latest()->get();

        return view(
            'dashboard.vaccine_management.index',
            compact('vaccines')
        );
    }


    // SHOW ADD PAGE
    public function create()
    {
        return view('dashboard.vaccine_management.add');
    }


    // STORE NEW VACCINE
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'disease' => 'required|string|max:255',
            'description' => 'nullable|string',
            'dose_count' => 'required|integer|min:1',
            'manufacturer' => 'nullable|string|max:255',
            'recommended_age_days' => 'nullable|integer|min:0',

            'availability_status' =>
                'required|in:available,limited,out_of_stock',
        ]);

        Vaccine::create($validated);

        return redirect()
            ->route('vaccines.index')
            ->with('success', 'Vaccine added successfully!');
    }


    // SHOW EDIT PAGE
    public function edit(Vaccine $vaccine)
    {
        return view(
            'dashboard.vaccine_management.edit',
            compact('vaccine')
        );
    }


    // UPDATE VACCINE
    public function update(Request $request, Vaccine $vaccine)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'disease' => 'required|string|max:255',
            'description' => 'nullable|string',
            'dose_count' => 'required|integer|min:1',
            'manufacturer' => 'nullable|string|max:255',
            'recommended_age_days' => 'nullable|integer|min:0',

            'availability_status' =>
                'required|in:available,limited,out_of_stock',
        ]);

        $vaccine->update($validated);

        return redirect()
            ->route('vaccines.index')
            ->with('success', 'Vaccine updated successfully!');
    }


    // DELETE VACCINE
    public function destroy(Vaccine $vaccine)
    {
        $vaccine->delete();

        return redirect()
            ->route('vaccines.index')
            ->with('success', 'Vaccine deleted successfully!');
    }
}