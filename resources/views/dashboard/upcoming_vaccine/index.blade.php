@extends('dashboard._mastertheme')

@section('title', 'Upcoming Vaccinations')

@section('body')

    <div class="container-fluid py-4 px-3 px-md-4" style="max-width: 1400px;">

        <div class="card card-custom p-3 p-md-4">

            <div class="d-flex align-items-center gap-3 mb-4">
                <div class="bg-teal-50 rounded-3 d-flex align-items-center justify-content-center"
                    style="width: 42px; height: 42px;">
                    <i class="fas fa-bell text-teal-600 fs-5"></i>
                </div>

                <div>
                    <h1 class="h3 fw-bold text-slate-800 mb-0">
                        Upcoming Vaccinations
                    </h1>
                    <p class="text-muted small mb-0">
                        Children due for their next dose
                    </p>
                </div>
            </div>

            <div class="table-responsive rounded-3 border">

                <table class="table table-hover mb-0">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Child</th>
                            <th>Vaccine</th>
                            <th>Last Dose</th>
                            <th>Next Dose</th>
                            <th>Next Due Date</th>
                            <th>Hospital</th>
                            <th>Days Left</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($upcoming as $record)

                                            @php
                                                $daysLeft = today()->diffInDays($record->next_dose_date, false);
                                            @endphp

                                            <tr>

                                                <td class="text-muted small">
                                                    {{ $loop->iteration }}
                                                </td>

                                                <td>
                                                    <div class="d-flex align-items-center gap-2">

                                                        <span class="child-avatar-sm bg-child-1">
                                                            {{ strtoupper(
                                substr($record->booking->child->first_name ?? '', 0, 1) .
                                substr($record->booking->child->last_name ?? '', 0, 1)
                            ) }}
                                                        </span>

                                                        <span class="fw-semibold">
                                                            {{ $record->booking->child->first_name ?? '' }}
                                                            {{ $record->booking->child->last_name ?? '' }}
                                                        </span>

                                                    </div>
                                                </td>

                                                <td>
                                                    {{ $record->booking->vaccine->name ?? '—' }}
                                                </td>

                                                <td class="text-secondary small">
                                                    Dose {{ $record->dose_number }}
                                                </td>

                                                <td class="text-secondary small">
                                                    Dose {{ $record->dose_number + 1 }}
                                                </td>

                                                <td class="text-secondary small text-nowrap">
                                                    {{ $record->next_dose_date->format('Y-m-d') }}
                                                </td>

                                                <td>
                                                    {{ $record->booking->hospital->name ?? '—' }}
                                                </td>

                                                <td>

                                                    @if ($daysLeft < 0)

                                                        <span class="badge badge-cancelled fw-normal">
                                                            <span class="status-indicator status-cancelled"></span>
                                                            Overdue
                                                        </span>

                                                    @elseif ($daysLeft <= 3)

                                                        <span class="badge badge-pending fw-normal">
                                                            <span class="status-indicator status-pending"></span>
                                                            {{ $daysLeft }} day{{ $daysLeft != 1 ? 's' : '' }} left
                                                        </span>

                                                    @else

                                                        <span class="badge badge-approved fw-normal">
                                                            <span class="status-indicator status-approved"></span>
                                                            {{ $daysLeft }} days left
                                                        </span>

                                                    @endif

                                                </td>

                                            </tr>

                        @empty

                            <tr>
                                <td colspan="8" class="text-center text-muted py-4">
                                    No upcoming doses.
                                </td>
                             </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

@endsection