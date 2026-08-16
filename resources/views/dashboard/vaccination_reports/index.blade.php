@extends('dashboard._mastertheme')

@section('title', 'Dashboard')

@section('body')

    <div class="container-fluid py-4 px-3 px-md-4" style="max-width: 1400px;">

        <div class="card card-custom p-3 p-md-4">

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-teal-50 rounded-3 d-flex align-items-center justify-content-center"
                        style="width: 42px; height: 42px;">
                        <i class="fas fa-file-medical-alt text-teal-600 fs-5"></i>
                    </div>
                    <div>
                        <h1 class="h3 fw-bold text-slate-800 mb-0">Vaccination Report</h1>
                        <p class="text-muted small mb-0">Record of all administered vaccinations</p>
                    </div>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <a href="{{ route('vaccin_report_add') }}" class="btn btn-teal d-flex align-items-center gap-2">
                        <i class="fas fa-plus-circle"></i> Add Record
                    </a>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Summary Cards -->
            <div class="row g-3 mb-4">
                <div class="col-md-3 col-sm-6">
                    <div class="p-3 rounded-3 border bg-light">
                        <p class="text-muted small mb-1">Total Records</p>
                        <h4 class="fw-bold mb-0">{{ $totalCount }}</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="p-3 rounded-3 border bg-light">
                        <p class="text-muted small mb-1">Completed</p>
                        <h4 class="fw-bold mb-0 text-success">{{ $completedCount }}</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="p-3 rounded-3 border bg-light">
                        <p class="text-muted small mb-1">Reaction Reported</p>
                        <h4 class="fw-bold mb-0 text-warning">{{ $reactionCount }}</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="p-3 rounded-3 border bg-light">
                        <p class="text-muted small mb-1">Follow-up Due</p>
                        <h4 class="fw-bold mb-0 text-danger">{{ $followUpDueCount }}</h4>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive rounded-3 border">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th style="width: 60px;">ID</th>
                            <th style="min-width: 100px;">Booking #</th>
                            <th style="min-width: 110px;">Vaccination Date</th>
                            <th style="width: 90px;">Dose #</th>
                            <th style="min-width: 110px;">Next Dose Date</th>
                            <th style="min-width: 130px;">Administered By</th>
                            <th style="width: 100px;">Status</th>
                            <th style="min-width: 150px;">Side Effects</th>
                            <th style="min-width: 150px;">Remarks</th>
                            <th style="width: 100px;" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($records as $record)
                            <tr>
                                <td class="text-muted small">{{ $record->id }}</td>
                                <td class="text-muted font-monospace small">{{ $record->booking->booking_number ?? '—' }}</td>
                                <td class="text-secondary small text-nowrap">{{ $record->vaccination_date->format('Y-m-d') }}</td>
                                <td><span class="badge bg-light text-dark fw-normal">{{ $record->dose_number }}</span></td>
                                <td class="text-secondary small text-nowrap">{{ optional($record->next_dose_date)->format('Y-m-d') ?? '—' }}</td>
                                <td class="text-secondary small">{{ $record->administeredBy->name ?? '—' }}</td>
                                <td>
                                    @if ($record->status == 'completed')
                                        <span class="badge badge-completed fw-normal"><span class="status-indicator status-completed"></span>Completed</span>
                                    @elseif ($record->status == 'pending')
                                        <span class="badge bg-warning-subtle text-warning-emphasis fw-normal">Pending</span>
                                    @else
                                        <span class="badge bg-danger-subtle text-danger-emphasis fw-normal">Cancelled</span>
                                    @endif
                                </td>
                                <td class="text-secondary small">{{ $record->side_effects ?? 'None reported' }}</td>
                                <td class="text-secondary small">{{ $record->remarks ?? '—' }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-1">
                                        <a href="{{ route('vaccin_report_edit', $record) }}" class="btn btn-sm btn-link text-teal p-1" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('vaccin_report_destroy', $record) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-link text-danger p-1" title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center text-muted py-4">No vaccination records found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection