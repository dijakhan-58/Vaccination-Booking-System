<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Child;
use App\Models\User;
use Illuminate\Http\Request;

// class ChildController extends Controller
// {
//     public function index()
//     {
//         // $children = Child::with('parent')->latest()->get();

//         return view('dashbaord.children.index', compact('children'));
//     }

//     public function create()
//     {
//         // $parents = User::role('Parent')->get();

//         return view('dashboard.children.create', compact('parents'));
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'parent_id' => 'required',
//             'first_name' => 'required',
//             'last_name' => 'required',
//             'dob' => 'required|date',
//             'gender' => 'required',
//         ]);

//         Child::create($request->all());

//         return redirect()
//             ->route('admin.children.index')
//             ->with('success', 'Child added successfully.');
//     }

//     public function show(Child $child)
//     {
//         return view('admin.children.show', compact('child'));
//     }

//     public function edit(Child $child)
//     {
//         $parents = User::role('Parent')->get();

//         return view('admin.children.edit', compact('child', 'parents'));
//     }

//     public function update(Request $request, Child $child)
//     {
//         $child->update($request->all());

//         return redirect()
//             ->route('admin.children.index')
//             ->with('success', 'Child updated successfully.');
//     }

//     public function destroy(Child $child)
//     {
//         $child->delete();

//         return redirect()
//             ->route('admin.children.index')
//             ->with('success', 'Child deleted successfully.');
//     }
// }

class ChildController extends Controller
{
    public function index()
    {
        return view('dashboard.children.fetch');

    }
    public function create()
    {
        return view('dashboard.children.add');

    }
}