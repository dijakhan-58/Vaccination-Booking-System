@extends('dashboard._mastertheme')

@section('body')

    <div class="container-fluid py-4 px-3 px-md-4" style="max-width: 100%;">

        <div class="card card-custom p-3 p-md-4">

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-teal-50 rounded-3 d-flex align-items-center justify-content-center"
                        style="width: 42px; height: 42px;">
                        <i class="fas fa-hourglass-half text-teal-600 fs-5"></i>
                    </div>
                    <div>
                        <h1 class="h3 fw-bold text-slate-800 mb-0">Parent Requests</h1>
                        <p class="text-muted small mb-0">Pending vaccination requests from parents</p>
                    </div>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <span class="badge bg-warning-subtle text-warning-emphasis d-flex align-items-center gap-2 px-3 py-2">
                        <i class="fas fa-hourglass-half"></i> Pending: {{ $pendingCount }}
                    </span>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive rounded-3 border">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th style="width: 60px;">ID</th>
                            <th style="width: 110px;">Booking #</th>
                            <th style="min-width: 120px;">Child</th>
                            <th style="min-width: 130px;">Parent</th>
                            <th style="min-width: 110px;">Vaccine</th>
                            <th style="min-width: 130px;">Hospital</th>
                            <th style="min-width: 100px;">Preferred Date</th>
                            <th style="min-width: 150px;">Reason</th>
                            <th style="width: 170px;" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bookings as $booking)
                            <tr>
                                <td class="text-muted font-monospace small">{{ $loop->iteration }}</td>
                                <td><span class="booking-number-badge">{{ $booking->booking_number }}</span></td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="child-avatar-sm bg-child-1">
                                            {{ strtoupper(substr($booking->child->first_name ?? '', 0, 1) . substr($booking->child->last_name ?? '', 0, 1)) }}
                                        </span>
                                        <span class="fw-semibold">{{ $booking->child->first_name ?? '' }} {{ $booking->child->last_name ?? '' }}</span>
                                    </div>
                                </td>
                                <td class="text-secondary">{{ $booking->child->parent->name ?? '—' }}</td>
                                <td>{{ $booking->vaccine->name ?? '—' }}</td>
                                <td><span class="hospital-badge-sm"><i class="fas fa-hospital me-1"></i> {{ $booking->hospital->name ?? '—' }}</span></td>
                                <td class="text-secondary small text-nowrap">{{ $booking->preferred_date->format('Y-m-d') }}</td>
                                <td class="text-secondary small">{{ $booking->reason ?? '—' }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-1">
                                        <form action="{{ route('parent_request.approve', $booking) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-success d-flex align-items-center gap-1" title="Approve">
                                                <i class="fas fa-check"></i> Approve
                                            </button>
                                        </form>
                                        <form action="{{ route('parent_request.reject', $booking) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-danger d-flex align-items-center gap-1" title="Reject">
                                                <i class="fas fa-times"></i> Reject
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center text-muted py-4">No pending requests.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection 