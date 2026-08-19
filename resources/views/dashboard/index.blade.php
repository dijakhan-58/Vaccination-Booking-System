@extends('dashboard._mastertheme')
@section('title', 'Dashboard')
@section('body')



<div class="main-content">

    <!-- HERO BANNER -->
    <div class="hero-banner d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
        <div>
            <h2>Good to see you, {{ auth()->user()->name ?? 'Admin' }}</h2>
            <p>Here's how immunization activity is trending across every partner hospital today.</p>
        </div>
        <div class="hero-actions d-flex gap-2">
            <a href="{{ route('dashboard') }}" class="btn btn-hero-outline">
                <i class="far fa-calendar-alt me-1"></i> {{ now()->format('d M Y') }}
            </a>
        </div>
    </div>

    <!-- KPI CARDS -->
    <div class="row g-3 mb-4 kpi-container">
        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-card">
                <div class="kpi-top"><div class="kpi-icon"><i class="fas fa-child"></i></div></div>
                <div class="kpi-details">
                    <div class="kpi-number">{{ $totalChildren }}</div>
                    <div class="kpi-label">Total Children</div>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-card">
                <div class="kpi-top"><div class="kpi-icon"><i class="fas fa-hospital"></i></div></div>
                <div class="kpi-details">
                    <div class="kpi-number">{{ $totalHospitals }}</div>
                    <div class="kpi-label">Total Hospitals</div>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-card">
                <div class="kpi-top"><div class="kpi-icon"><i class="fas fa-syringe"></i></div></div>
                <div class="kpi-details">
                    <div class="kpi-number">{{ $totalVaccines }}</div>
                    <div class="kpi-label">Total Vaccines</div>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-card">
                <div class="kpi-top"><div class="kpi-icon"><i class="fas fa-calendar-check"></i></div></div>
                <div class="kpi-details">
                    <div class="kpi-number">{{ $todaysBookings }}</div>
                    <div class="kpi-label">Today's Bookings</div>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-card warning-style">
                <div class="kpi-top"><div class="kpi-icon"><i class="fas fa-clock"></i></div></div>
                <div class="kpi-details">
                    <div class="kpi-number">{{ $pendingRequests }}</div>
                    <div class="kpi-label">Pending Requests</div>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-4 col-xl-2">
            <div class="kpi-card">
                <div class="kpi-top"><div class="kpi-icon"><i class="fas fa-check-double"></i></div></div>
                <div class="kpi-details">
                    <div class="kpi-number">{{ $completedCount }}</div>
                    <div class="kpi-label">Completed</div>
                </div>
            </div>
        </div>
    </div>

    <!-- INFO BOXES -->
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="info-box">
                <div class="info-left">
                    <div class="info-icon"><i class="fas fa-calendar-plus"></i></div>
                    <div>
                        <div class="info-title">Upcoming Vaccinations</div>
                        <div class="info-desc">Next 7 days</div>
                    </div>
                </div>
                <div class="info-number">{{ $upcomingVaccinations }}</div>
            </div>
        </div>
        {{-- <div class="col-md-4">
            <div class="info-box">
                <div class="info-left">
                    <div class="info-icon gold"><i class="fas fa-clock"></i></div>
                    <div>
                        <div class="info-title">Expiring Vaccines</div>
                        <div class="info-desc">Within 30 days</div>
                    </div>
                </div>
                <div class="info-number">{{ $expiringVaccines }}</div>
            </div>
        </div> --}}
        <div class="col-md-4">
            <div class="info-box">
                <div class="info-left">
                    <div class="info-icon red"><i class="fas fa-times-circle"></i></div>
                    <div>
                        <div class="info-title">Missed/Cancelled</div>
                        <div class="info-desc">Last 30 days</div>
                    </div>
                </div>
                <div class="info-number">{{ $missedCancelled }}</div>
            </div>
        </div>
    </div>

    <!-- CHARTS -->
    <div class="row g-3 mb-4">
        <div class="col-lg-8">
            <div class="panel">
                <div class="panel-header">
                    <h5><i class="fas fa-chart-bar"></i>Monthly Vaccination Trend</h5>
                    <a href="{{ route('vaccin_report_index') }}" class="panel-action">Full <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
                <div class="chart-wrapper">
                    <canvas id="monthlyChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="panel">
                <div class="panel-header">
                    <h5><i class="fas fa-chart-pie"></i>Booking Status</h5>
                    <span class="panel-badge">Distribution</span>
                </div>
                <div class="chart-wrapper-sm">
                    <canvas id="statusChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- PENDING REQUESTS / TODAY'S VACCINATIONS / LOW STOCK -->
    <div class="row g-3 mb-4">
        <div class="col-lg-7">
            <div class="panel">
                <div class="panel-header">
                    <h5>
                        <i class="fas fa-clipboard-list"></i>Pending Parent Requests
                        <span class="badge ms-1" style="background:#ef4444; color:#fff; border-radius:999px; font-size:0.6rem;">{{ $pendingRequests }}</span>
                    </h5>
                    <a href="{{ route('parent_index') }}" class="panel-action">View All <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
                <div class="table-responsive">
                    <table class="mini-table table">
                        <thead>
                            <tr>
                                <th>Parent</th>
                                <th>Child</th>
                                <th>Vaccine</th>
                                <th>Hospital</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pendingBookings as $booking)
                                <tr>
                                    <td><strong>{{ $booking->child->parent->name ?? '—' }}</strong></td>
                                    <td>{{ $booking->child->first_name ?? '—' }}</td>
                                    <td>{{ $booking->vaccine->name ?? '—' }}</td>
                                    <td>{{ $booking->hospital->name ?? '—' }}</td>
                                    <td class="text-end">
                                        <form action="{{ route('parent_request.approve', $booking) }}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-sm p-0 me-2" style="color:#16a34a;" title="Approve">
                                                <i class="fas fa-check-circle"></i>
                                            </button>
                                        </form>
                                        <form action="{{ route('parent_request.reject', $booking) }}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-sm p-0" style="color:#ef4444;" title="Reject">
                                                <i class="fas fa-times-circle"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="5" class="text-center text-muted py-3">No pending requests.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="row g-3">
                <div class="col-12">
                    <div class="panel">
                        <div class="panel-header">
                            <h5><i class="fas fa-calendar-day"></i>Today's Vaccinations</h5>
                            <span class="badge rounded-pill" style="background:#0b3c26; color:#fff; font-size:0.55rem;">{{ $todaysVaccinations->count() }}</span>
                        </div>
                        <div class="table-responsive">
                            <table class="mini-table table">
                                <thead>
                                    <tr><th>Child</th><th>Vaccine</th><th>Time</th></tr>
                                </thead>
                                <tbody>
                                    @forelse ($todaysVaccinations as $tv)
                                        <tr>
                                            <td><strong>{{ $tv->child->first_name ?? '—' }}</strong></td>
                                            <td>{{ $tv->vaccine->name ?? '—' }}</td>
                                            <td>{{ $tv->appointment_time ?? '—' }}</td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="3" class="text-center text-muted py-3">Nothing scheduled today.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-12">
                    <div class="panel">
                        <div class="panel-header">
                            <h5><i class="fas fa-exclamation-triangle" style="color:#ef4444;"></i>Low Stock Alerts</h5>
                            <span class="badge rounded-pill" style="background:#ef4444; color:#fff; font-size:0.55rem;">{{ $lowStockItems->count() }}</span>
                        </div>
                        <div>
                            @forelse ($lowStockItems as $item)
                                <div class="stock-alert-item {{ $item->stock_quantity > 5 ? 'warning' : '' }}">
                                    <div class="alert-icon"><i class="fas fa-exclamation"></i></div>
                                    <div class="alert-info">
                                        <div class="name">{{ $item->vaccine->name ?? '—' }}</div>
                                        <div class="detail">{{ $item->hospital->name ?? '—' }} · Batch #{{ $item->batch_number ?? 'N/A' }}</div>
                                    </div>
                                    <div class="alert-qty">{{ $item->stock_quantity }} units</div>
                                </div>
                            @empty
                                <p class="text-muted small mb-0">No low stock items.</p>
                            @endforelse
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- RECENT BOOKINGS & ACTIVITY -->
    <div class="row g-3">
        <div class="col-lg-7">
            <div class="panel">
                <div class="panel-header">
                    <h5><i class="fas fa-book"></i>Recent Bookings</h5>
                    <a href="{{ route('bookings.index') }}" class="panel-action">View All <i class="fas fa-arrow-right ms-1"></i></a>
                </div>
                <div class="table-responsive">
                    <table class="mini-table table">
                        <thead>
                            <tr><th>Booking #</th><th>Child</th><th>Vaccine</th><th>Hospital</th><th>Date</th><th>Status</th></tr>
                        </thead>
                        <tbody>
                            @forelse ($recentBookings as $rb)
                                <tr>
                                    <td><span style="font-weight:700; color:var(--forest-green); font-size:0.75rem;">{{ $rb->booking_number }}</span></td>
                                    <td>{{ $rb->child->first_name ?? '—' }} {{ $rb->child->last_name ?? '' }}</td>
                                    <td>{{ $rb->vaccine->name ?? '—' }}</td>
                                    <td>{{ $rb->hospital->name ?? '—' }}</td>
                                    <td>{{ $rb->preferred_date->format('d M Y') }}</td>
                                    <td>
                                        @if ($rb->status == 'pending')
                                            <span class="status-badge gold"><i class="fas fa-clock"></i> Pending</span>
                                        @elseif ($rb->status == 'approved')
                                            <span class="status-badge green"><i class="fas fa-check-circle"></i> Approved</span>
                                        @elseif ($rb->status == 'completed')
                                            <span class="status-badge green"><i class="fas fa-check-double"></i> Completed</span>
                                        @else
                                            <span class="status-badge gray"><i class="fas fa-times"></i> Cancelled</span>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="6" class="text-center text-muted py-3">No bookings yet.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="panel">
                <div class="panel-header">
                    <h5><i class="fas fa-history"></i>Recent Activity</h5>
                </div>
                @forelse ($recentActivity as $activity)
                    <div class="activity-item">
                        <span class="activity-dot {{ $activity['color'] }}"></span>
                        <div class="activity-content">
                            <div class="text">{{ $activity['text'] }}</div>
                            <div class="meta"><i class="far fa-clock me-1"></i> {{ $activity['time']->diffForHumans() }}</div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted small mb-0">No recent activity.</p>
                @endforelse
            </div>
        </div>
    </div>

    <div class="text-center text-muted small mt-5 pt-3 border-top" style="border-color: var(--border-color) !important;">
        <i class="far fa-copyright me-1"></i> {{ date('Y') }} Care4Kids — Vaccination Management System
    </div>

</div>

<!-- Chart.js (only these two charts require JS; everything else is server-rendered) -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    Chart.defaults.font.family = "'Inter', sans-serif";

    new Chart(document.getElementById('monthlyChart').getContext('2d'), {
        type: 'bar',
        data: {
            labels: @json($monthlyLabels),
            datasets: [{
                label: 'Vaccinations',
                data: @json($monthlyData),
                backgroundColor: 'rgba(11, 60, 38, 0.85)',
                borderColor: '#0b3c26',
                borderRadius: 6,
                barPercentage: 0.55
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true, grid: { color: '#f1f5f1' }, ticks: { font: { size: 10 }, color: '#64748b' } },
                x: { grid: { display: false }, ticks: { font: { size: 10 }, color: '#64748b' } }
            }
        }
    });

    new Chart(document.getElementById('statusChart').getContext('2d'), {
        type: 'doughnut',
        data: {
            labels: ['Completed', 'Approved', 'Pending', 'Cancelled'],
            datasets: [{
                data: @json($statusData),
                backgroundColor: ['#0b3c26', '#4ade80', '#f59e0b', '#94a3b8'],
                borderWidth: 3,
                borderColor: '#ffffff'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: '70%',
            plugins: {
                legend: {
                    position: 'right',
                    labels: { usePointStyle: true, pointStyleWidth: 8, font: { size: 10, weight: '600' }, color: '#64748b' }
                }
            }
        }
    });
});
</script>

@endsection