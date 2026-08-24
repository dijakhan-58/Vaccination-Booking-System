<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Child;
use App\Models\Hospital;
use App\Models\Vaccine;
use App\Models\VaccinationRecord;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
      
        $totalChildren = Child::count();
        $totalHospitals = Hospital::count();
        $totalVaccines = Vaccine::count();
        $todaysBookings = Booking::whereDate('preferred_date', today())->count();
        $pendingRequests = Booking::where('status', 'pending')->count();
        $completedCount = Booking::where('status', 'completed')->count();

        $upcomingVaccinations = Booking::whereBetween('preferred_date', [today(), today()->addDays(7)])
            ->whereIn('status', ['pending', 'approved'])
            ->count();

        $missedCancelled = Booking::where('status', 'cancelled')
            ->where('updated_at', '>=', now()->subDays(30))
            ->count();

  
        $monthlyRaw = VaccinationRecord::selectRaw('MONTH(vaccination_date) as month, COUNT(*) as total')
            ->whereYear('vaccination_date', now()->year)
            ->groupBy('month')
            ->pluck('total', 'month');

        $monthlyLabels = [];
        $monthlyData = [];
        for ($m = 1; $m <= 12; $m++) {
            $monthlyLabels[] = Carbon::create()->month($m)->format('M');
            $monthlyData[] = $monthlyRaw->get($m, 0);
        }

    
        $statusCounts = Booking::selectRaw('status, COUNT(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status');

        $statusLabels = ['completed', 'approved', 'pending', 'cancelled'];
        $statusData = array_map(fn ($s) => $statusCounts->get($s, 0), $statusLabels);

  
        $pendingBookings = Booking::with(['child.parent', 'vaccine', 'hospital'])
            ->where('status', 'pending')
            ->latest()
            ->take(4)
            ->get();

       
        $todaysVaccinations = Booking::with(['child', 'vaccine', 'hospital'])
            ->whereDate('preferred_date', today())
            ->where('status', 'approved')
            ->get();

        $recentBookings = Booking::with(['child', 'vaccine', 'hospital'])
            ->latest()
            ->take(4)
            ->get();

        
        $recentActivity = collect();

        Booking::with('child')->where('status', 'approved')->latest('updated_at')->take(3)->get()
            ->each(fn ($b) => $recentActivity->push([
                'text' => 'Booking approved for ' . ($b->child->first_name ?? 'Unknown') . ' · ' . ($b->vaccine->name ?? ''),
                'time' => $b->updated_at,
                'color' => 'green',
            ]));

        Child::latest()->take(3)->get()
            ->each(fn ($c) => $recentActivity->push([
                'text' => 'New child registered · ' . $c->first_name . ' ' . $c->last_name,
                'time' => $c->created_at,
                'color' => 'gray',
            ]));

        VaccinationRecord::with('booking.child')->latest('updated_at')->take(3)->get()
            ->each(fn ($v) => $recentActivity->push([
                'text' => 'Vaccination completed · ' . ($v->booking->child->first_name ?? 'Unknown'),
                'time' => $v->updated_at,
                'color' => 'green',
            ]));

        $recentActivity = $recentActivity->sortByDesc('time')->take(6)->values();

        return view('dashboard.index', compact(
            'totalChildren',
            'totalHospitals',
            'totalVaccines',
            'todaysBookings',
            'pendingRequests',
            'completedCount',
            'upcomingVaccinations',
            'missedCancelled',
            'monthlyLabels',
            'monthlyData',
            'statusLabels',
            'statusData',
            'pendingBookings',
            'todaysVaccinations',
            'recentBookings',
            'recentActivity'
        ));
    }
}