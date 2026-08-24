@extends('dashboard._mastertheme')

@section('body')

    <div class="container-fluid py-4 px-3 px-md-4" style="max-width: 100%;">

        <div class="card card-custom p-3 p-md-4">

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-teal-50 rounded-3 d-flex align-items-center justify-content-center"
                        style="width: 42px; height: 42px;">
                        <i class="fas fa-syringe text-teal-600 fs-5"></i>
                    </div>
                    <div>
                        <h1 class="h3 fw-bold text-slate-800 mb-0">Upcoming Vaccine Status</h1>
                        <p class="text-muted small mb-0">Upcoming vaccines with current availability status</p>
                    </div>
                </div>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-4 col-sm-6">
                    <div class="p-3 rounded-3 border bg-light d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted small mb-1">Available</p>
                            <h4 class="fw-bold mb-0 text-success">{{ $availableCount }}</h4>
                        </div>
                        <i class="fas fa-check-circle text-success fs-3"></i>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="p-3 rounded-3 border bg-light d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted small mb-1">Limited</p>
                            <h4 class="fw-bold mb-0 text-warning">{{ $limitedCount }}</h4>
                        </div>
                        <i class="fas fa-exclamation-triangle text-warning fs-3"></i>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="p-3 rounded-3 border bg-light d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted small mb-1">Out of Stock</p>
                            <h4 class="fw-bold mb-0 text-danger">{{ $outOfStockCount }}</h4>
                        </div>
                        <i class="fas fa-times-circle text-danger fs-3"></i>
                    </div>
                </div>
            </div>

            <div class="table-responsive rounded-3 border">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th style="width: 60px;">ID</th>
                            <th style="min-width: 120px;">Vaccine Name</th>
                            <th style="min-width: 120px;">Disease</th>
                            <th style="min-width: 160px;">Description</th>
                            <th style="width: 90px;">Dose Count</th>
                            <th style="min-width: 100px;">Manufacturer</th>
                            <th style="width: 120px;">Rec. Age (days)</th>
                            <th style="width: 140px;">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($vaccines as $vaccine)
                            <tr>
                                <td class="text-muted font-monospace small">{{ $vaccine->id }}</td>
                                <td class="fw-semibold">{{ $vaccine->name }}</td>
                                <td>{{ $vaccine->disease }}</td>
                                <td class="text-secondary small">{{ $vaccine->description ?? '—' }}</td>
                                <td><span class="badge bg-light text-dark fw-normal">{{ $vaccine->dose_count }}</span></td>
                                <td>{{ $vaccine->manufacturer ?? '—' }}</td>
                                <td>{{ $vaccine->recommended_age_days ?? '—' }}</td>
                                <td>
                                    @if ($vaccine->availability_status == 'available')
                                        <span class="badge badge-available fw-normal"><span class="status-indicator status-available"></span>Available</span>
                                    @elseif ($vaccine->availability_status == 'limited')
                                        <span class="badge badge-limited fw-normal"><span class="status-indicator status-limited"></span>Limited</span>
                                    @else
                                        <span class="badge badge-outofstock fw-normal"><span class="status-indicator status-outofstock"></span>Out of Stock</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-muted py-4">No vaccines found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection