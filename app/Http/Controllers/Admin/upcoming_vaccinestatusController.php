<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vaccine;

class upcoming_vaccinestatusController extends Controller
{
    public function index()
    {
        $vaccines = Vaccine::latest()->get();

        $availableCount = $vaccines->where('availability_status', 'available')->count();
        $limitedCount = $vaccines->where('availability_status', 'limited')->count();
        $outOfStockCount = $vaccines->where('availability_status', 'out_of_stock')->count();

        return view(
            'dashboard.upcoming_vaccine_status.fetch',
            compact('vaccines', 'availableCount', 'limitedCount', 'outOfStockCount')
        );
    }
}