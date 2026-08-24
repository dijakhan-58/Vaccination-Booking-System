<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Booking;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('dashboard._mastertheme', function ($view) {
            $pendingBookings = Booking::with(['child', 'vaccine', 'hospital'])
                ->where('status', 'pending')
                ->latest()
                ->take(5)
                ->get();

            $view->with([
                'headerPendingCount' => $pendingBookings->count(),
                'headerPendingBookings' => $pendingBookings,
            ]);
        });
    }
}