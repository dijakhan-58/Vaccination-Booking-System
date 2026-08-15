<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="strict-origin-when-cross-origin">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta name="description" content="Vaccination Booking System - Admin Dashboard">
    <meta name="author" content="Vaccination Booking System">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/dashboard/images/care4kids_logo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/dashboard/icons/favicon.png') }}">

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Title -->
    <title>@yield('title', 'Dashboard') - Vaccination Booking System</title>

    <!-- Theme Color -->
    <meta name="theme-color" content="#6366f1">

    <!-- PWA Manifest -->
    <link rel="manifest" href="{{ asset('assets/manifest-DTaoG9pG.json') }}">

    <!-- Main JavaScript Modules -->
    <script type="module" crossorigin src="{{ asset('assets/dashboard/js/rolldown-runtime-QTnfLwEv.js') }}"></script>
    <script type="module" crossorigin src="{{ asset('assets/dashboard/js/vendor-bootstrap-DgdwyLYF.js') }}"></script>
    <script type="module" crossorigin src="{{ asset('assets/dashboard/js/vendor-ui-DCXHuVks.js') }}"></script>
    <script type="module" crossorigin src="{{ asset('assets/dashboard/js/vendor-charts-Dcrko_Gn.js') }}"></script>
    <script type="module" crossorigin src="{{ asset('assets/dashboard/js/main-Ynqz-sB_.js') }}"></script>
    <link rel="stylesheet" crossorigin href="{{ asset('assets/dashboard/mainstyle.css') }}">


    @stack('styles')
</head>

<body data-page="dashboard" class="admin-layout">
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <!-- Loading Screen -->
    <div id="loading-screen" class="loading-screen">
        <div class="loading-spinner">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <!-- Main Wrapper -->
    <div class="admin-wrapper" id="admin-wrapper">

        <!-- Header -->
        <header class="admin-header">
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom px-3">
                <div class="container-fluid p-0">

                    <!-- Sidebar Toggle (Mobile) -->
                    <button class="hamburger-menu me-2" type="button" data-sidebar-toggle aria-label="Toggle sidebar">
                        <i class="bi bi-list fs-4"></i>
                    </button>

                    <!-- Logo / Brand -->
                    <a class="navbar-brand d-flex align-items-center me-3" href="{{ route('dashboard') }}">
                        <img src="{{ asset('assets/dashboard/images/care4kids_logo.jpeg') }}" alt="Care4Kids Logo"
                            style="height: 32px; width: auto; object-fit: contain;"
                            class="d-inline-block align-text-top me-2 flex-shrink-0">
                        <span class="h5 mb-0 fw-bold text-primary-emphasis">Care4Kids</span>
                    </a>

                    <!-- Search Bar with Alpine.js -->
                    <div class="search-container flex-grow-1 mx-2 mx-lg-4 d-none d-sm-block" x-data="searchComponent">
                        <div class="position-relative">
                            <input type="search" class="form-control" placeholder="Search... (Ctrl+K)" x-model="query"
                                @input="search()" data-search-input aria-label="Search">
                            <i
                                class="bi bi-search position-absolute top-50 end-0 translate-middle-y me-3 text-muted"></i>
                        </div>
                    </div>

                    <!-- Right Side Icons -->
                    <div class="navbar-nav flex-row ms-auto align-items-center">
                        <!-- Theme Toggle -->
                        <div x-data="themeSwitch">
                            <button class="btn btn-outline-secondary me-2" type="button" @click="toggle()"
                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Toggle theme">
                                <i class="bi bi-sun-fill" x-show="currentTheme === 'light'"></i>
                                <i class="bi bi-moon-fill" x-show="currentTheme === 'dark'"></i>
                            </button>
                        </div>

                        <!-- Fullscreen Toggle -->
                        <button class="btn btn-outline-secondary me-2 d-none d-lg-inline-block" type="button"
                            data-fullscreen-toggle data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Toggle fullscreen">
                            <i class="bi bi-arrows-fullscreen icon-hover"></i>
                        </button>

                        <!-- Notifications -->
                        <div class="dropdown me-2">
                            <button class="btn btn-outline-secondary position-relative" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-bell"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    3
                                </span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                                <li>
                                    <h6 class="dropdown-header">Notifications</h6>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('notifications') }}">New parent request</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('notifications') }}">Vaccine stock
                                        low</a></li>
                                <li><a class="dropdown-item" href="{{ route('notifications') }}">Booking
                                        cancelled</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-center small text-primary"
                                        href="{{ route('notifications') }}">View all notifications</a></li>
                            </ul>
                        </div>

                        <!-- User Menu -->
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary d-flex align-items-center" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('assets/dashboard/images/avatar-placeholder.svg') }}"
                                    alt="User Avatar" width="24" height="24" class="rounded-circle me-2">
                                <span
                                    class="d-none d-md-inline">{{ auth()->check() ? auth()->user()->name : 'Admin' }}</span>
                                <i class="bi bi-chevron-down ms-1 fs-7"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                                <li><a class="dropdown-item" href="#"><i
                                            class="bi bi-person me-2"></i>Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="bi bi-gear me-2"></i>Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">
                                            <i class="bi bi-box-arrow-right me-2"></i>Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
{{-- sidebar --}}
        <aside class="admin-sidebar" id="admin-sidebar">
            <div class="sidebar-content">
                <nav class="sidebar-nav">
                    <ul class="nav flex-column gap-1">

                        <!-- 1. Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('dashboard') }}">
                                <i class="bi bi-speedometer2"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <!-- 2. Role Management -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse"
                                data-bs-target="#roleManagement" aria-expanded="false">
                                <i class="bi bi-person-badge"></i>
                                <span>Role Management</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse" id="roleManagement">
                                <ul class="nav nav-submenu flex-column">
                                    <li class="nav-item"><a class="nav-link" href="#"><i
                                                class="bi bi-plus-circle"></i><span>Add
                                                Role</span></a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"><i
                                                class="bi bi-list-ul"></i><span>Fetch
                                                Role</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- 3. User Management -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse"
                                data-bs-target="#userManagement" aria-expanded="false">
                                <i class="bi bi-people"></i>
                                <span>User Management</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse" id="userManagement">
                                <ul class="nav nav-submenu flex-column">
                                    <li class="nav-item"><a class="nav-link" href="#"><i
                                                class="bi bi-person-plus"></i><span>Add
                                                User</span></a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"><i
                                                class="bi bi-list-ul"></i><span>Fetch
                                                User</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- 4. Hospital Management -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse"
                                data-bs-target="#hospitalManagement" aria-expanded="false">
                                <i class="bi bi-hospital"></i>
                                <span>Hospital Management</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse" id="hospitalManagement">
                                <ul class="nav nav-submenu flex-column">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('hospitals.add') }}"><i
                                                class="bi bi-hospital-fill"></i><span>Add Hospital</span></a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('hospitals.fetch') }}"><i
                                                class="bi bi-buildings"></i><span>Fetch Hospital</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- 5. Child Management -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse"
                                data-bs-target="#childManagement" aria-expanded="false">
                                <i class="bi bi-person-hearts"></i>
                                <span>Child Management</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse" id="childManagement">
                                <ul class="nav nav-submenu flex-column">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('children.add') }}"><i
                                                class="bi bi-person-plus"></i><span>Add Child</span></a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('children.index') }}"><i
                                                class="bi bi-people"></i><span>Fetch Child</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- 6. Vaccine Management -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse"
                                data-bs-target="#vaccineManagement" aria-expanded="false">
                                <i class="bi bi-shield-plus"></i>
                                <span>Vaccine Management</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse" id="vaccineManagement">
                                <ul class="nav nav-submenu flex-column">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('vaccines.add') }}"><i
                                                class="bi bi-plus-circle"></i><span>Add
                                                Vaccine</span></a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('vaccines.index') }}"><i
                                                class="bi bi-list-ul"></i><span>Fetch Vaccine</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- 7. Upcoming Vaccination -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse"
                                data-bs-target="#upcomingVaccination" aria-expanded="false">
                                <i class="bi bi-calendar-week"></i>
                                <span>Upcoming Vaccination</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse" id="upcomingVaccination">
                                <ul class="nav nav-submenu flex-column">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('upcoming_index') }}"><i
                                                class="bi bi-list-ul"></i><span>Fetch Upcoming Vaccination</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- 8. Vaccination Report -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse"
                                data-bs-target="#vaccinationReport" aria-expanded="false">
                                <i class="bi bi-file-earmark-medical"></i>
                                <span>Vaccination Report</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse" id="vaccinationReport">
                                <ul class="nav nav-submenu flex-column">
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('vaccin_report_add') }}"><i
                                                class="bi bi-plus-circle"></i><span>Add
                                                Report</span></a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('vaccin_report_index') }}"><i
                                                class="bi bi-list-ul"></i><span>Fetch
                                                Report</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- 9. Vaccination Status -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse"
                                data-bs-target="#vaccinationStatus" aria-expanded="false">
                                <i class="bi bi-clipboard2-pulse"></i>
                                <span>Vaccination Status</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse" id="vaccinationStatus">
                                <ul class="nav nav-submenu flex-column">
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('vaccine_status_index') }}"><i
                                                class="bi bi-list-ul"></i><span>Fetch
                                                Vaccination Status</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- 10. Parent Appointment Request -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse"
                                data-bs-target="#parentAppointmentRequest" aria-expanded="false">
                                <i class="bi bi-envelope-check"></i>
                                <span>Parent Appointment Request</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse" id="parentAppointmentRequest">
                                <ul class="nav nav-submenu flex-column">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('parent_index') }}"><i
                                                class="bi bi-list-ul"></i><span>Fetch
                                                Appointment Request</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- 11. Booking Detail -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse"
                                data-bs-target="#bookingDetail" aria-expanded="false">
                                <i class="bi bi-card-list"></i>
                                <span>Booking Detail</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse" id="bookingDetail">
                                <ul class="nav nav-submenu flex-column">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('bookings/index') }}"><i
                                                class="bi bi-list-ul"></i><span>Fetch
                                                Booking Detail</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- 12. Upcoming Vaccine Status -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse"
                                data-bs-target="#upcomingVaccineStatus" aria-expanded="false">
                                <i class="bi bi-clock-history"></i>
                                <span>Upcoming Vaccine Status</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse" id="upcomingVaccineStatus">
                                <ul class="nav nav-submenu flex-column">
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('upcoming_vaccine_status_index') }}"><i
                                                class="bi bi-list-ul"></i><span>Fetch
                                                Upcoming Vaccine Status</span></a></li>
                                </ul>
                            </div>
                        </li>

                        <!-- 13. Profile -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-person-badge"></i>
                                <span>Profile</span>
                            </a>
                        </li>

                        <!-- 14. Logout -->
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger">
                                    <i class="bi bi-box-arrow-right me-2"></i>Logout
                                </button>
                            </form>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- Sidebar Backdrop (mobile overlay) -->
        <div class="sidebar-backdrop" id="sidebar-backdrop" aria-hidden="true"></div>

        <!-- Main Content -->
        <main id="main-content" class="admin-main">
            <div class="container-fluid p-4">
                @yield('body')
            </div>
        </main>

        <!-- Footer -->
        <footer class="admin-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0 text-muted">&copy; {{ date('Y') }} Vaccination Booking System</p>
                    </div>
                </div>
            </div>
        </footer>

    </div> <!-- /.admin-wrapper -->

    <!-- Toast Container -->
    <div aria-live="polite" aria-atomic="true" class="position-fixed top-0 end-0 p-3" style="z-index: 1050">
        <div id="toast-container"></div>
    </div>

    @stack('modals')

    <!-- JavaScript Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sidebar = document.getElementById('admin-sidebar');
            const backdrop = document.getElementById('sidebar-backdrop');
            const toggle = document.querySelector('[data-sidebar-toggle]');

            if (!sidebar || !toggle || !backdrop) return;

            function openSidebar() {
                sidebar.classList.add('show');
                backdrop.classList.add('show');
            }

            function closeSidebar() {
                sidebar.classList.remove('show');
                backdrop.classList.remove('show');
            }

            toggle.addEventListener('click', (e) => {
                e.preventDefault();
                sidebar.classList.contains('show') ? closeSidebar() : openSidebar();
            });

            backdrop.addEventListener('click', closeSidebar);

            // Auto-close sidebar on mobile view when clicking internal sub links
            document.querySelectorAll('.sidebar-nav .nav-link:not([data-bs-toggle])').forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth < 992) closeSidebar();
                });
            });
        });
    </script>
    @stack('scripts')
</body>

</html>
