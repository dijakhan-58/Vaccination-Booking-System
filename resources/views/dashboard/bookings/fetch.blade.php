@extends('dashboard._mastertheme')

@section('title', 'Dashboard')

@section('body')

    <div class="container-fluid py-4 px-3 px-md-4" style="max-width: 1400px;">

        <div class="card card-custom p-3 p-md-4">

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-teal-50 rounded-3 d-flex align-items-center justify-content-center"
                        style="width: 42px; height: 42px;">
                        <i class="fas fa-calendar-check text-teal-600 fs-5"></i>
                    </div>
                    <div>
                        <h1 class="h3 fw-bold text-slate-800 mb-0">Booking Details</h1>
                        <p class="text-muted small mb-0">Manage and track all appointments</p>
                    </div>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <a href="{{ route('parent.appointment') }}" class="btn btn-teal d-flex align-items-center gap-2">
                        <i class="fas fa-plus-circle"></i> New Booking
                    </a>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive rounded-3 border">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th style="width: 60px;">#</th>
                            <th style="min-width: 100px;">Booking #</th>
                            <th style="min-width: 120px;">Child</th>
                            <th style="min-width: 120px;">Vaccine</th>
                            <th style="min-width: 130px;">Hospital</th>
                            <th style="min-width: 100px;">Preferred Date</th>
                            <th style="width: 90px;">Time</th>
                            <th style="min-width: 130px;">Reason</th>
                            <th style="width: 100px;">Status</th>
                            <th style="width: 160px;" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($bookings as $booking)
                            <tr>
                                <td class="text-muted small">{{ $loop->iteration }}</td>
                                <td class="text-muted font-monospace small">{{ $booking->booking_number }}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="child-avatar-sm bg-child-1">
                                            {{ strtoupper(substr($booking->child->first_name ?? '', 0, 1) . substr($booking->child->last_name ?? '', 0, 1)) }}
                                        </span>
                                        <span class="fw-semibold">{{ $booking->child->first_name ?? '' }}
                                            {{ $booking->child->last_name ?? '' }}</span>
                                    </div>
                                </td>
                                <td>{{ $booking->vaccine->name ?? '—' }}</td>
                                <td>{{ $booking->hospital->name ?? '—' }}</td>
                                <td class="text-secondary small text-nowrap">{{ $booking->preferred_date->format('Y-m-d') }}
                                </td>
                                <td class="text-secondary small">{{ $booking->appointment_time ?? '—' }}</td>
                                <td class="text-secondary small">{{ $booking->reason ?? '—' }}</td>
                                <td>
                                    @if ($booking->status == 'pending')
                                        <span class="badge badge-pending fw-normal"><span
                                                class="status-indicator status-pending"></span>Pending</span>
                                    @elseif ($booking->status == 'approved')
                                        <span class="badge badge-approved fw-normal"><span
                                                class="status-indicator status-approved"></span>Approved</span>
                                    @elseif ($booking->status == 'completed')
                                        <span class="badge badge-completed fw-normal"><span
                                                class="status-indicator status-completed"></span>Completed</span>
                                    @else
                                        <span class="badge badge-cancelled fw-normal"><span
                                                class="status-indicator status-cancelled"></span>Cancelled</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-1">
                                        <a href="{{ route('bookings.edit', $booking) }}"
                                            class="btn btn-sm btn-link text-teal p-1" title="Edit"> <i
                                                class="fas fa-edit"></i>
                                        </a>

                                        {{-- @if ($booking->status == 'pending')
                                                                        <form action="{{ route('bookings.approve', $booking) }}" method="POST" class="d-inline">
                                                                            @csrf
                                                                            <button type="submit" class="btn btn-sm btn-link text-success p-1" title="Approve">
                                                                                <i class="fas fa-check-circle"></i>
                                                                            </button>
                                                                        </form>
                                                                    @endif --}}

                                        {{-- @if (!in_array($booking->status, ['cancelled', 'completed']))
                                                                        <form action="{{ route('bookings.cancel', $booking) }}" method="POST" class="d-inline">
                                                                            @csrf
                                                                            <button type="submit" class="btn btn-sm btn-link text-danger p-1" title="Cancel">
                                                                                <i class="fas fa-times-circle"></i>
                                                                            </button>
                                                                        </form>
                                                                    @endif --}}

                                        <form action="{{ route('bookings.destroy', $booking) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-link text-danger p-1"
                                                title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center text-muted py-4">No bookings found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div> 

        </div>
    </div>

@endsection
