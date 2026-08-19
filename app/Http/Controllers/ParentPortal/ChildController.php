<?php

namespace App\Http\Controllers\ParentPortal;

use App\Http\Controllers\Controller;
use App\Models\Child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    // Show all children
    public function show()
    {
        $children = Child::where('parent_id', auth()->id())->get();

        return view('front_theme.child.child_detail', compact('children'));
    }

    // Add Child Form
    public function create()
    {
        return view('front_theme.child.addchild');
    }

    // Save Child
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required|date',
            'gender' => 'required',
            'blood_group' => 'nullable',
            'b_form_number' => 'nullable',
            'weight' => 'nullable|numeric',
            'medical_notes' => 'nullable',
            'allergy_notes' => 'nullable',
        ]);

        Child::create([
            'parent_id' => auth()->id(),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'blood_group' => $request->blood_group,
            'b_form_number' => $request->b_form_number,
            'weight' => $request->weight,
            'medical_notes' => $request->medical_notes,
            'allergy_notes' => $request->allergy_notes,
        ]);

        return redirect()
            ->route('parent.childDetail')
            ->with('success', 'Child added successfully.');
    }

    // View One Child
    public function viewRecord(Child $child)
    {
        return view('front_theme.child.view_record', compact('child'));
    }

    // Edit Form
    public function edit(Child $child)
    {
        return view('front_theme.child.edit_child', compact('child'));
    }

    // Update Child
    public function update(Request $request, Child $child)
    {
        $child->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'blood_group' => $request->blood_group,
            'b_form_number' => $request->b_form_number,
            'weight' => $request->weight,
            'medical_notes' => $request->medical_notes,
            'allergy_notes' => $request->allergy_notes,
        ]);

        return redirect()
            ->route('parent.childDetail')
            ->with('success', 'Child updated successfully.');
    }

    // Delete Child
    public function destroy(Child $child)
    {
        $child->delete();

        return redirect()
            ->route('parent.childDetail')
            ->with('success', 'Child deleted successfully.');
    }
}