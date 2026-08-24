@extends('front_theme._mastertheme')

@section('fornt_body')

    <div class="container mt-5">

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="card border-0 shadow-sm rounded-4 mb-4">
            <div class="card-body p-4">

                <div class="d-flex align-items-center">

                    <div class="profile-avatar me-3">
                        {{ strtoupper(substr($user->name ?? 'Parent', 0, 1)) }}
                    </div>

                    <div class="flex-grow-1">
                        <h2 class="mb-1 fw-bold">
                            {{ $user->name ?? 'Parent Name' }}
                        </h2>

                        <p class="text-muted mb-0">
                            {{ $user->email ?? 'parent@example.com' }}
                        </p>
                    </div>

                    <!-- Notification Bell (pure-CSS hover dropdown — this theme
                         loads Bootstrap's CSS but not its JS, so data-bs-toggle
                         does nothing here; this doesn't depend on it at all) -->
                    <style>
                        .notif_bell_wrap { position: relative; display: inline-block; }
                        .notif_bell_toggle {
                            width: 44px; height: 44px; border-radius: 50%;
                            background-color: #f0f4f1; color: #0b3c26;
                            display: flex; align-items: center; justify-content: center;
                            text-decoration: none; position: relative;
                        }
                        .notif_bell_menu {
                            display: none;
                            position: absolute; right: 0; top: 100%;
                            margin-top: 10px; min-width: 320px;
                            background: #fff; border-radius: 1rem;
                            box-shadow: 0 10px 30px rgba(0,0,0,.15);
                            overflow: hidden; z-index: 1000;
                        }
                        .notif_bell_wrap:hover .notif_bell_menu,
                        .notif_bell_wrap:focus-within .notif_bell_menu {
                            display: block;
                        }
                    </style>


                </div>

                <div class="stat-row mt-4">

                    <div class="stat">
                        <b>{{ $childrenCount }}</b>
                        <span>Children Registered</span>
                    </div>

                    <div class="stat">
                        <b>{{ $upcomingCount }}</b>
                        <span>Upcoming Appointments</span>
                    </div>

                    <div class="stat">
                        <b>{{ $completedCount }}</b>
                        <span>Vaccinations Completed</span>
                    </div>

                </div>

            </div>
        </div>


        <div class="card border-0 shadow-sm rounded-4 mb-4">

            <div class="card-body p-4">

                <div class="card-head mb-4">

                    <div>
                        <span class="eyebrow">
                            <i class="bi bi-person-lines-fill"></i>
                            Account
                        </span>

                        <h2>Contact Details</h2>
                    </div>

                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0 ps-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('parent.profile.update') }}">

                    @csrf
                    @method('PUT')

                    <div class="form-grid">

                        <div class="field">
                            <label>Full Name</label>

                            <input type="text" name="name" value="{{ old('name', $user->name) }}">
                        </div>


                        <div class="field">
                            <label>Email Address</label>

                            <input type="email" name="email" value="{{ old('email', $user->email) }}">
                        </div>

                    </div>


                    <div class="form-actions">

                        <a href="{{ route('parent.profile') }}" class="btn btn-outline">
                            Cancel
                        </a>

                        <button type="submit" class="btn btn-primary">

                            <i class="bi bi-check2"></i>
                            Save Changes

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>


@endsection