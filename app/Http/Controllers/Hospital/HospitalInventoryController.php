<?php

namespace App\Http\Controllers\Hospital;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;

class HospitalInventoryController extends Controller
{
   public function index()
{
    $user = Auth::user();

    $inventory = Inventory::where('hospital_id', $user->hospital_id)->get();

    return view('hospital.inventory.index', compact('inventory'));
}

    public function create()
    {
        return view('hospital.inventory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'vaccine_id' => 'required',
            'stock_quantity' => 'required|integer',
            'batch_number' => 'required',
            'expiry_date' => 'required|date',
        ]);

        Inventory::create([
            'hospital_id' => Auth::user()->hospital_id,
            'vaccine_id' => $request->vaccine_id,
            'stock_quantity' => $request->stock_quantity,
            'batch_number' => $request->batch_number,
            'expiry_date' => $request->expiry_date,
        ]);

        return redirect()
            ->route('hospital.inventory.index')
            ->with('success', 'Inventory added.');
    }

    public function edit(Inventory $inventory)
    {
        return view('hospital.inventory.edit', compact('inventory'));
    }

    public function update(Request $request, Inventory $inventory)
    {
        $inventory->update($request->all());

        return redirect()
            ->route('hospital.inventory.index');
    }

    public function destroy(Inventory $inventory)
    {
        $inventory->delete();

        return back()->with('success', 'Inventory deleted.');
    }
}