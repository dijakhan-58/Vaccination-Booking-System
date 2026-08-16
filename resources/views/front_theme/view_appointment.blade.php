@extends('front_theme._mastertheme')

@section('fornt_body')

    @if(($appointments ?? collect())->isEmpty())
        <div class="card">
            <div class="empty">
                <div class="ic"><i class="bi bi-calendar-x"></i></div>
                <h3>No appointments yet</h3>
                <p>Book your child's next vaccination visit to see it listed here.</p>
                <a href="{{ route('parent.appointment') }}" class="btn btn-primary"><i class="bi bi-calendar-plus"></i> Book
                    Appointment</a>
            </div>
        </div>
    @else
        <div class="card">
            <div class="card-head">
                <div>
                    <span class="eyebrow"><i class="bi bi-calendar-check"></i> Bookings</span>
                    <h2>All Appointments</h2>
                    <p>2 upcoming &bull; 1 completed</p>
                </div>
                <div class="flex gap-2">
                    <select
                        style="border:1.5px solid var(--line);border-radius:10px;padding:9px 14px;font-size:.85rem;font-weight:600;color:var(--forest);">
                        <option>All Status</option>
                        <option>Confirmed</option>
                        <option>Pending</option>
                        <option>Completed</option>
                        <option>Cancelled</option>
                    </select>
                    <a href="{{ route('parent.appointment') }}" class="btn btn-sage btn-sm"><i class="bi bi-plus-lg"></i>
                        New</a>
                </div>
            </div>

            <div class="table-wrap">
                <table class="data">
                    <thead>
                        <tr>
                            <th>Child</th>
                            <th>Vaccine</th>
                            <th>Hospital</th>
                            <th>Date &amp; Time</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Example rows — replace with @foreach($appointments as $a) --}}
                        <tr>
                            <td style="font-weight:600;color:var(--ink);">Ayesha Khan</td>
                            <td>Measles (1st Dose)</td>
                            <td>Care4Kids Clinic — Gulshan</td>
                            <td>02 Sep 2026, 10:00 AM</td>
                            <td><span class="badge confirmed">Confirmed</span></td>
                            <td>
                                <div class="flex gap-2">
                                    <button class="btn btn-outline btn-sm">Reschedule</button>
                                    <button class="btn btn-sm" style="background:#FBE7E3;color:var(--red);">Cancel</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight:600;color:var(--ink);">Hamza Khan</td>
                            <td>DPT Booster</td>
                            <td>Care4Kids Clinic — DHA</td>
                            <td>10 Sep 2026, 02:00 PM</td>
                            <td><span class="badge pending">Pending</span></td>
                            <td>
                                <div class="flex gap-2">
                                    <button class="btn btn-outline btn-sm">Reschedule</button>
                                    <button class="btn btn-sm" style="background:#FBE7E3;color:var(--red);">Cancel</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight:600;color:var(--ink);">Ayesha Khan</td>
                            <td>Polio (OPV), 3rd Dose</td>
                            <td>City General Hospital</td>
                            <td>20 May 2024, 11:00 AM</td>
                            <td><span class="badge completed">Completed</span></td>
                            <td>
                                <button class="btn btn-ghost btn-sm"><i class="bi bi-file-earmark-text"></i> Report</button>
                            </td>
                        </tr>

                        {{-- Loop for real data:
                        @foreach($appointments as $a)
                        <tr>
                            <td style="font-weight:600;color:var(--ink);">{{ $a->child->name }}</td>
                            <td>{{ $a->vaccine->name }}</td>
                            <td>{{ $a->hospital->name }}</td>
                            <td>{{ \Carbon\Carbon::parse($a->date)->format('d M Y') }}, {{ $a->time }}</td>
                            <td><span class="badge {{ strtolower($a->status) }}">{{ $a->status }}</span></td>
                            <td>
                                @if($a->status === 'Confirmed' || $a->status === 'Pending')
                                <div class="flex gap-2">
                                    <button class="btn btn-outline btn-sm">Reschedule</button>
                                    <button class="btn btn-sm" style="background:#FBE7E3;color:var(--red);">Cancel</button>
                                </div>
                                @else
                                <button class="btn btn-ghost btn-sm"><i class="bi bi-file-earmark-text"></i> Report</button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        --}}
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection