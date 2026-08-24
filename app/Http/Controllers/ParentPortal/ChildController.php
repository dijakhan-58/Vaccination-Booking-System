<?php

namespace App\Http\Controllers\ParentPortal;

use App\Http\Controllers\Controller;
use App\Models\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChildController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Show Logged-in Parent's Children
    |--------------------------------------------------------------------------
    */

    public function show()
    {
        $children = Child::where('parent_id', Auth::id())->get();

        return view(
            'front_theme.child.child_detail',
            compact('children')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Create Child
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('front_theme.child.addchild');
    }


    /*
    |--------------------------------------------------------------------------
    | Store Child
    |--------------------------------------------------------------------------
    */

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
            'parent_id' => Auth::id(),
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


    /*
    |--------------------------------------------------------------------------
    | View Child Record
    |--------------------------------------------------------------------------
    */

    public function viewRecord($child)
    {
        $child = Child::where('id', $child)
            ->where('parent_id', Auth::id())
            ->firstOrFail();

        return view(
            'front_theme.child.view_record',
            compact('child')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Edit Child
    |--------------------------------------------------------------------------
    */

    public function edit($child)
    {
        $child = Child::where('id', $child)
            ->where('parent_id', Auth::id())
            ->firstOrFail();

        return view(
            'front_theme.child.edit_child',
            compact('child')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | Update Child
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $child)
    {
        $child = Child::where('id', $child)
            ->where('parent_id', Auth::id())
            ->firstOrFail();

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


    /*
    |--------------------------------------------------------------------------
    | Delete Child
    |--------------------------------------------------------------------------
    */

    public function destroy($child)
    {
        $child = Child::where('id', $child)
            ->where('parent_id', Auth::id())
            ->firstOrFail();

        $child->delete();

        return redirect()
            ->route('parent.childDetail')
            ->with('success', 'Child deleted successfully.');
    }
}