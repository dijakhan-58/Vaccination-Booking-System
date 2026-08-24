<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Child;
use App\Models\User;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function index()
    {
        $children = Child::with('parent')->latest()->get();

        return view('dashboard.children.fetch', compact('children'));
    }

    public function create()
    {
        $parents = User::all();

        return view('dashboard.children.add', compact('parents'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'parent_id' => 'required|exists:users,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'blood_group' => 'nullable|string|max:5',
            'b_form_number' => 'nullable|string|max:255',
            'weight' => 'nullable|numeric|min:0',
            'medical_notes' => 'nullable|string',
            'allergy_notes' => 'nullable|string',
        ]);

        Child::create($request->only([
            'parent_id',
            'first_name',
            'last_name',
            'dob',
            'gender',
            'blood_group',
            'b_form_number',
            'weight',
            'medical_notes',
            'allergy_notes',
        ]));

        return redirect()
            ->route('children.index')
            ->with('success', 'Child added successfully.');
    }

    public function edit(Child $child)
    {
        $parents = User::all();

        return view('dashboard.children.edit', compact('child', 'parents'));
    }

    public function update(Request $request, Child $child)
    {
        $request->validate([
            'parent_id' => 'required|exists:users,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'blood_group' => 'nullable|string|max:5',
            'b_form_number' => 'nullable|string|max:255',
            'weight' => 'nullable|numeric|min:0',
            'medical_notes' => 'nullable|string',
            'allergy_notes' => 'nullable|string',
        ]);

        $child->update($request->only([
            'parent_id',
            'first_name',
            'last_name',
            'dob',
            'gender',
            'blood_group',
            'b_form_number',
            'weight',
            'medical_notes',
            'allergy_notes',
        ]));

        return redirect()
            ->route('children.index')
            ->with('success', 'Child updated successfully.');
    }

    public function destroy(Child $child)
    {
        $child->delete();

        return redirect()
            ->route('children.index')
            ->with('success', 'Child deleted successfully.');
    } 
}