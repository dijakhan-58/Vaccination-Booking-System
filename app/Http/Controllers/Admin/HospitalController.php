<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller   
{
    public function index()
    {
        $hospitals = Hospital::latest()->get();

        return view('dashboard.hospitals.fetch', compact('hospitals'));
    }

    public function create()
    {
        return view('dashboard.hospitals.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'floors' => 'required|integer|min:1',
            'timings_slot' => 'required|string|max:255',
            'status' => 'required|in:active,inactive,pending',
            'profile_img' => 'nullable|image',
        ]);

        $data = $request->only(['name', 'city', 'address', 'floors', 'timings_slot', 'status']);

        if ($request->hasFile('profile_img')) {
            $data['profile_img'] = $request->file('profile_img')->store('hospitals', 'public');
        }

        Hospital::create($data);

        return redirect()
            ->route('hospitals.fetch')
            ->with('success', 'Hospital added successfully.');
    }

    public function edit(Hospital $hospital)
    {
        return view('dashboard.hospitals.edit', compact('hospital'));
    }

    public function update(Request $request, Hospital $hospital)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'floors' => 'required|integer|min:1',
            'timings_slot' => 'required|string|max:255',
            'status' => 'required|in:active,inactive,pending',
            'profile_img' => 'nullable|image',
        ]);

        $data = $request->only(['name', 'city', 'address', 'floors', 'timings_slot', 'status']);

        if ($request->hasFile('profile_img')) {
            $data['profile_img'] = $request->file('profile_img')->store('hospitals', 'public');
        }

        $hospital->update($data);

        return redirect()
            ->route('hospitals.fetch')
            ->with('success', 'Hospital updated successfully.');
    }

    public function destroy(Hospital $hospital)
    {
        $hospital->delete();

        return redirect()
            ->route('hospitals.fetch')
            ->with('success', 'Hospital deleted successfully.');
    }
}