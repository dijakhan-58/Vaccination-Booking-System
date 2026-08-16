@extends('front_theme._mastertheme')

@section('fornt_body')

    @if(($children ?? collect())->isEmpty())
        <div class="card">
            <div class="empty">
                <div class="ic"><i class="bi bi-emoji-smile"></i></div>
                <h3>No children added yet</h3>
                <p>Add your child's details to start tracking their vaccination schedule.</p>
                <a href="#" class="btn btn-primary"><i class="bi bi-person-plus"></i> Add Child</a>
            </div>
        </div>
    @else
        <div class="card container mt-5" style="margin-bottom:24px;">
            <div class="card-head">
                <div>
                    <span class="eyebrow"><i class="bi bi-people"></i> Family</span>
                    <h2>All Children</h2>
                </div>
                <a href="#" class="btn btn-sage btn-sm"><i class="bi bi-plus-lg"></i> Add Another
                    Child</a>
            </div>

            <div class="child-grid">
                {{-- Example child card 1 --}}
                <div class="child-card">
                    <div class="child-avatar">AK</div>
                    <h4>Ayesha Khan</h4>
                    <div class="meta">2 yrs 3 mo &bull; Female</div>
                    <div class="progress-track">
                        <div class="progress-fill" style="width:75%;"></div>
                    </div>
                    <a href="#child-1" class="btn btn-outline btn-block btn-sm">View Record</a>
                </div>

                {{-- Example child card 2 --}}
                <div class="child-card">
                    <div class="child-avatar">HK</div>
                    <h4>Hamza Khan</h4>
                    <div class="meta">7 mo &bull; Male</div>
                    <div class="progress-track">
                        <div class="progress-fill" style="width:40%;"></div>
                    </div>
                    <a href="#child-2" class="btn btn-outline btn-block btn-sm">View Record</a>
                </div>

                {{-- Loop for real data:
                @foreach($children as $child)
                <div class="child-card">
                    <div class="child-avatar">{{ strtoupper(substr($child->name,0,2)) }}</div>
                    <h4>{{ $child->name }}</h4>
                    <div class="meta">{{ $child->age }} &bull; {{ ucfirst($child->gender) }}</div>
                    <div class="progress-track">
                        <div class="progress-fill" style="width:{{ $child->progress }}%;"></div>
                    </div>
                    <a href="#child-{{ $child->id }}" class="btn btn-outline btn-block btn-sm">View Record</a>
                </div>
                @endforeach
                --}}
            </div>
        </div>

        {{-- Vaccination record detail --}}
        <div class="card container mt-5" id="child-1">
            <div class="card-head">
                <div>
                    <span class="eyebrow"><i class="bi bi-clipboard2-pulse"></i> Vaccination Record</span>
                    <h2>Ayesha Khan</h2>
                    <p>75% complete &bull; 2 doses upcoming</p>
                </div>
                <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-calendar-plus"></i>
                    Book Next Dose</a>
            </div>

            <div class="table-wrap">
                <table class="data">
                    <thead>
                        <tr>
                            <th>Vaccine</th>
                            <th>Dose</th>
                            <th>Due Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>BCG</td>
                            <td>1st</td>
                            <td>10 Jan 2024</td>
                            <td><span class="badge completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>Pentavalent</td>
                            <td>2nd</td>
                            <td>15 Mar 2024</td>
                            <td><span class="badge completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>Polio (OPV)</td>
                            <td>3rd</td>
                            <td>20 May 2024</td>
                            <td><span class="badge completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>Measles</td>
                            <td>1st</td>
                            <td>02 Sep 2026</td>
                            <td><span class="badge upcoming">Upcoming</span></td>
                        </tr>
                        <tr>
                            <td>MMR</td>
                            <td>1st</td>
                            <td>18 Jun 2026</td>
                            <td><span class="badge missed">Missed</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection