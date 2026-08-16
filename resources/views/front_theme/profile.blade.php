@extends('front_theme._mastertheme')

@section('fornt_body')


        <div class="container mt-5 card" style="margin-bottom:24px;">
            <div class="profile-head">
                <div class="profile-avatar">{{ strtoupper(substr($user->name ?? 'Parent', 0, 1)) }}</div>
                <div style="flex:1;">
                    <h2>{{ $user->name ?? 'Parent Name' }}</h2>
                    <p style="margin:4px 0 0;">{{ $user->email ?? 'parent@example.com' }}</p>
                </div>
            </div>

            <div class="stat-row">
                <div class="stat"><b>{{ $childrenCount ?? 2 }}</b><span>Children Registered</span></div>
                <div class="stat"><b>{{ $upcomingCount ?? 1 }}</b><span>Upcoming Appointments</span></div>
                <div class="stat"><b>{{ $completedCount ?? 6 }}</b><span>Vaccinations Completed</span></div>
            </div>
        </div>

        <div class=" container card">
            <div class="card-head">
                <div>
                    <span class="eyebrow"><i class="bi bi-person-lines-fill"></i> Account</span>
                    <h2>Contact Details</h2>
                </div>
                <button class="btn btn-ghost btn-sm"><i class="bi bi-key"></i> Change Password</button>
            </div>

            <form method="POST" action="#">
                @csrf
                @method('PUT')
                <div class="form-grid">
                    <div class="field">
                        <label>Full Name</label>
                        <input type="text" name="name" value="{{ $user->name ?? '' }}">
                    </div>
                    <div class="field">
                        <label>Email Address</label>
                        <input type="email" name="email" value="{{ $user->email ?? '' }}">
                    </div>
                    <div class="field">
                        <label>Phone Number</label>
                        <input type="tel" name="phone" value="{{ $user->phone ?? '' }}" placeholder="03XX-XXXXXXX">
                    </div>
                    <div class="field">
                        <label>CNIC</label>
                        <input type="text" name="cnic" value="{{ $user->cnic ?? '' }}" placeholder="XXXXX-XXXXXXX-X">
                    </div>
                    <div class="field full">
                        <label>Home Address</label>
                        <textarea name="address" rows="2">{{ $user->address ?? '' }}</textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-outline">Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-check2"></i> Save Changes</button>
                </div>
            </form>
        </div>


@endsection