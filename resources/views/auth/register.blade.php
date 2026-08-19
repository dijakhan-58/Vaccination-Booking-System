<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="strict-origin-when-cross-origin">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta name="description" content="Vaccination Booking System - Create Account">
    <meta name="author" content="Vaccination Booking System">

    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/dashboard/images/care4kids_logo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/dashboard/icons/favicon.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>Create Account - Vaccination Booking System</title>

    <meta name="theme-color" content="#6366f1">

    <link rel="manifest" href="{{ asset('assets/manifest-DTaoG9pG.json') }}">

    <script type="module" crossorigin src="{{ asset('assets/dashboard/js/rolldown-runtime-QTnfLwEv.js') }}"></script>
    <script type="module" crossorigin src="{{ asset('assets/dashboard/js/vendor-bootstrap-DgdwyLYF.js') }}"></script>
    <script type="module" crossorigin src="{{ asset('assets/dashboard/js/vendor-ui-DCXHuVks.js') }}"></script>
    <script type="module" crossorigin src="{{ asset('assets/dashboard/js/vendor-charts-Dcrko_Gn.js') }}"></script>
    <script type="module" crossorigin src="{{ asset('assets/dashboard/js/main-Ynqz-sB_.js') }}"></script>

    <link rel="stylesheet" crossorigin href="{{ asset('assets/dashboard/login.css') }}">
</head>

<body>

    <div class="shard s1"></div>
    <div class="shard s2"></div>
    <div class="shard s3"></div>

    <div class="stage">
        <div class="card">

            <!-- LEFT: BRAND PANEL -->
            <div class="panel">
                <div class="panel-shape-anim"></div>

                <div class="brand">
                    <img src="{{ asset('assets/dashboard/images/care4kids_logo.jpeg') }}" alt="Care4Kids Logo"
                        class="brand-logo">
                    care4kids
                </div>

                <div class="tabs">
                    <div class="panel-copy">
                        <h2>Start their<br>protection.</h2>
                        <p>
                            Create a family profile and book your child's first appointment in minutes.
                        </p>
                    </div>

                    <svg class="heartline" viewBox="0 0 150 40">
                        <path d="M0 20 H30 L38 4 L48 36 L58 20 H150" />
                    </svg>

                    <div class="tab-track" data-active="signup">
                        <div class="tab-indicator"></div>

                        <a href="{{ route('login') }}" class="tab-btn login">
                            LOG IN
                        </a>

                        <a href="{{ route('register') }}" class="tab-btn signup active">
                            SIGN UP
                        </a>
                    </div>
                </div>
            </div>

            <!-- RIGHT: FORM PANEL -->
            <div class="form-side">
               

                <div class="views">

                    <!-- ================= SIGN UP ================= -->
                    <div class="view active" id="signupView">

                        <div class="form-title">Create your account</div>

                        <div class="form-sub">
                            Sign up to start tracking your child's vaccination schedule
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- NAME -->
                            <div class="field">
                                <i class="bi bi-person"></i>

                                <input type="text" name="name" placeholder="Full name"
                                    value="{{ old('name') }}" required autofocus autocomplete="name">
                            </div>

                            @error('name')
                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                            <!-- EMAIL -->
                            <div class="field">
                                <i class="bi bi-envelope"></i>

                                <input type="email" name="email" placeholder="Enter your email"
                                    value="{{ old('email') }}" required autocomplete="username">
                            </div>

                            @error('email')
                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                            <!-- PASSWORD -->
                            <div class="field">
                                <i class="bi bi-lock"></i>

                                <input type="password" name="password" placeholder="Password" id="signupPass"
                                    required autocomplete="new-password">

                                <i class="bi bi-eye toggle-eye" onclick="togglePass('signupPass', this)"></i>
                            </div>

                            @error('password')
                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                            <!-- CONFIRM PASSWORD -->
                            <div class="field">
                                <i class="bi bi-lock-fill"></i>

                                <input type="password" name="password_confirmation" placeholder="Confirm password"
                                    id="signupPassConfirm" required autocomplete="new-password">

                                <i class="bi bi-eye toggle-eye" onclick="togglePass('signupPassConfirm', this)"></i>
                            </div>

                            @error('password_confirmation')
                                <div class="text-danger small mt-1">
                                    {{ $message }}
                                </div>
                            @enderror

                            <!-- SIGN UP BUTTON -->
                            <button class="btn-geo" type="submit">
                                CREATE ACCOUNT
                            </button>

                        </form>

                        <div class="switch-line">
                            Already have an account?

                            <a href="{{ route('login') }}">
                                Log in
                            </a>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <script>
        function togglePass(id, icon) {
            const input = document.getElementById(id);
            const isPass = input.type === 'password';

            input.type = isPass ? 'text' : 'password';

            icon.classList.toggle('bi-eye');
            icon.classList.toggle('bi-eye-slash');
        }
    </script>

</body>

</html>