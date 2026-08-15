<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vaccine;
use Illuminate\Http\Request;

// class VaccineController extends Controller
// {
//     public function index()
//     {
//         $vaccines = Vaccine::latest()->get();

//         return view('admin.vaccines.index', compact('vaccines'));
//     }

//     public function create()
//     {
//         return view('admin.vaccines.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'name' => 'required',
//             'disease' => 'required',
//             'dose_count' => 'required|integer',
//         ]);

//         Vaccine::create([
//             'name' => $request->name,
//             'disease' => $request->disease,
//             'description' => $request->description,
//             'dose_count' => $request->dose_count,
//             'manufacturer' => $request->manufacturer,
//             'recommended_age_days' => $request->recommended_age_days,
//             'availability_status' => $request->availability_status,
//         ]);

//         return redirect()
//             ->route('admin.vaccines.index')
//             ->with('success', 'Vaccine added successfully.');
//     }

//     public function show(Vaccine $vaccine)
//     {
//         return view('admin.vaccines.show', compact('vaccine'));
//     }

//     public function edit(Vaccine $vaccine)
//     {
//         return view('admin.vaccines.edit', compact('vaccine'));
//     }

//     public function update(Request $request, Vaccine $vaccine)
//     {
//         $vaccine->update($request->all());

//         return redirect()
//             ->route('admin.vaccines.index')
//             ->with('success', 'Vaccine updated successfully.');
//     }

//     public function destroy(Vaccine $vaccine)
//     {
//         $vaccine->delete();

//         return redirect()
//             ->route('admin.vaccines.index')
//             ->with('success', 'Vaccine deleted successfully.');
//     }
// }


class VaccineController extends Controller
{
    public function index()
    {
        return view('dashboard.vaccine_management.index');


    }
    public function  create(){
        return view('dashboard.vaccine_management.add');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'disease' => 'required|string|max:255',
            'description' => 'nullable|string',
            'dose_count' => 'required|integer|min:1',
            'manufacturer' => 'required|string',
            'recommended_age_days' => 'required|integer',
            'min_stock_level' => 'required|integer',
            'availability' => 'required|in:Available,Limited,Out of Stock',
        ]);

        Vaccine::create($validated);

        return redirect()->route('vaccines.index')->with('success', 'Vaccine added successfully!');
    }
}