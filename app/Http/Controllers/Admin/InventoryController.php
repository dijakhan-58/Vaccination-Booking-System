<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use App\Models\Hospital;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $inventory = Inventory::with(['hospital', 'vaccine'])->latest()->get();

        return view('admin.inventory.index', compact('inventory'));
    }

    public function create()
    {
        $hospitals = Hospital::all();
        $vaccines = Vaccine::all();

        return view('admin.inventory.create', compact('hospitals', 'vaccines'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'hospital_id' => 'required',
            'vaccine_id' => 'required',
            'stock_quantity' => 'required|integer',
            'batch_number' => 'required',
            'expiry_date' => 'required|date',
        ]);

        Inventory::create($request->all());

        return redirect()
            ->route('admin.inventory.index')
            ->with('success', 'Inventory added successfully.');
    }

    public function edit(Inventory $inventory)
    {
        $hospitals = Hospital::all();
        $vaccines = Vaccine::all();

        return view('admin.inventory.edit', compact(
            'inventory',
            'hospitals',
            'vaccines'
        ));
    }

    public function update(Request $request, Inventory $inventory)
    {
        $inventory->update($request->all());

        return redirect()
            ->route('admin.inventory.index')
            ->with('success', 'Inventory updated successfully.');
    }

    public function destroy(Inventory $inventory)
    {
        $inventory->delete();

        return redirect()
            ->route('admin.inventory.index')
            ->with('success', 'Inventory deleted successfully.');
    }
}