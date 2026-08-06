@extends('dashboard._mastertheme')

@section('title', 'Dashboard')


@section('body')
<section>
    <!-- Page Header -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4">
        <div>
            <h1 class="h3 mb-0">Dashboard</h1>
            <p class="text-muted mb-0">Welcome back! Here's what's happening.</p>
        </div>
        <div class="d-flex gap-2 flex-shrink-0">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newItemModal" aria-label="New Item">
                <i class="bi bi-plus-lg me-2" aria-hidden="true"></i>
                <span class="d-none d-sm-inline">New Item</span>
            </button>
            <button type="button" class="btn btn-outline-secondary" data-bs-toggle="tooltip" title="Refresh data">
                <i class="bi bi-arrow-clockwise icon-hover"></i>
            </button>
            <button type="button" class="btn btn-outline-secondary d-none d-sm-inline-block" data-bs-toggle="tooltip" title="Export data">
                <i class="bi bi-download icon-hover"></i>
            </button>
            <button type="button" class="btn btn-outline-secondary d-none d-sm-inline-block" data-bs-toggle="tooltip" title="Settings">
                <i class="bi bi-gear icon-hover"></i>
            </button>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="row g-3 g-lg-4 mb-4">
        <div class="col-sm-6 col-xl-3" x-data="statsCounter({{ $totalChildren ?? 0 }}, 5)">
            <div class="card stats-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="stats-icon bg-primary bg-opacity-10 text-primary">
                                <i class="bi bi-people"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="h6 mb-0 text-muted">Total Children</p>
                            <div class="h3 mb-0" aria-live="polite" data-stat-value><span x-text="value.toLocaleString()">{{ $totalChildren ?? 0 }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card stats-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="stats-icon bg-success bg-opacity-10 text-success">
                                <i class="bi bi-calendar-check"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="h6 mb-0 text-muted">Today's Vaccinations</p>
                            <h3 class="mb-0">{{ $todaysVaccinations ?? 0 }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card stats-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="stats-icon bg-warning bg-opacity-10 text-warning">
                                <i class="bi bi-hourglass-split"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="h6 mb-0 text-muted">Pending Requests</p>
                            <h3 class="mb-0">{{ $pendingRequests ?? 0 }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card stats-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <div class="stats-icon bg-info bg-opacity-10 text-info">
                                <i class="bi bi-hospital"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="h6 mb-0 text-muted">Active Hospitals</p>
                            <h3 class="mb-0">{{ $activeHospitals ?? 0 }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Bookings -->
    <div class="row g-4 mb-4">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="h5 card-title mb-0">Recent Bookings</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Booking ID</th>
                                    <th>Child</th>
                                    <th>Vaccine</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody id="recent-bookings-table">
                                <!-- Bookings injected here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h2 class="h5 card-title mb-0">Recent Activity</h2>
                </div>
                <div class="card-body">
                    <div class="activity-feed">
                        <div class="activity-item">
                            <div class="activity-icon bg-primary bg-opacity-10 text-primary">
                                <i class="bi bi-person-plus"></i>
                            </div>
                            <div class="activity-content">
                                <p class="mb-1">New child registered</p>
                                <small class="text-muted">2 minutes ago</small>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon bg-success bg-opacity-10 text-success">
                                <i class="bi bi-check2-circle"></i>
                            </div>
                            <div class="activity-content">
                                <p class="mb-1">Booking confirmed</p>
                                <small class="text-muted">5 minutes ago</small>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon bg-warning bg-opacity-10 text-warning">
                                <i class="bi bi-exclamation-triangle"></i>
                            </div>
                            <div class="activity-content">
                                <p class="mb-1">Vaccine stock low</p>
                                <small class="text-muted">1 hour ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
