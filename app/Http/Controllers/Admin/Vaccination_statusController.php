<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vaccine;
use Illuminate\Http\Request;

class Vaccination_statusController extends Controller
{
    public function index()
    {
        $vaccines = Vaccine::latest()->get();

        $availableCount = $vaccines->where('availability_status', 'available')->count();
        $limitedCount = $vaccines->where('availability_status', 'limited')->count();
        $outOfStockCount = $vaccines->where('availability_status', 'out_of_stock')->count();

        return view(
            'dashboard.vaccination_status.fetch',
            compact('vaccines', 'availableCount', 'limitedCount', 'outOfStockCount')
        );
    }

    public function updateStatus(Request $request, Vaccine $vaccine)
    {
        $request->validate([
            'availability_status' => 'required|in:available,limited,out_of_stock',
        ]);

        $vaccine->update([
            'availability_status' => $request->availability_status,
        ]);

        return redirect()
            ->route('vaccine_status_index')
            ->with('success', 'Vaccine status updated successfully.');
    }
} 