@extends('dashboard._mastertheme')

@section('body')

    <div class="container-fluid py-4 px-3 px-md-4" style="max-width: 100%;">

        <div class="card card-custom p-3 p-md-4">

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-teal-50 rounded-3 d-flex align-items-center justify-content-center"
                        style="width: 42px; height: 42px;">
                        <i class="fas fa-calendar-plus text-teal-600 fs-5"></i>
                    </div>
                    <div>
                        <h1 class="h3 fw-bold text-slate-800 mb-0">Upcoming Vaccines</h1>
                        <p class="text-muted small mb-0">Vaccine schedule listing</p>
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
                            <th style="width: 110px;">Availability</th>
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
                                        <span class="badge badge-available fw-normal">available</span>
                                    @elseif ($vaccine->availability_status == 'limited')
                                        <span class="badge badge-limited fw-normal">limited</span>
                                    @else
                                        <span class="badge badge-outofstock fw-normal">out of stock</span>
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