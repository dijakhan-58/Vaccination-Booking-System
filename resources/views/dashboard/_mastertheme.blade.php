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
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/dashboard/icons/favicon.svg') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/dashboard/icons/favicon.png') }}">

    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Title -->
    <title>@yield('title', 'Dashboard') - Vaccination Booking System</title>

    <!-- Theme Color -->
    <meta name="theme-color" content="#6366f1">

    <!-- PWA Manifest -->
    <link rel="manifest" href="{{ asset('assets/manifest-DTaoG9pG.json') }}">

    <!-- Main JavaScript Modules -->
    <script type="module" crossorigin src="{{ asset('assets/rolldown-runtime-QTnfLwEv.js') }}"></script>
    <script type="module" crossorigin src="{{ asset('assets/vendor-bootstrap-DgdwyLYF.js') }}"></script>
    <script type="module" crossorigin src="{{ asset('assets/vendor-ui-DCXHuVks.js') }}"></script>
    <script type="module" crossorigin src="{{ asset('assets/vendor-charts-Dcrko_Gn.js') }}"></script>
    <script type="module" crossorigin src="{{ asset('assets/main-Ynqz-sB_.js') }}"></script>
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
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
                <div class="container-fluid">
                    <!-- Logo/Brand -->
                    <a class="navbar-brand d-flex align-items-center" href="{{ route('dashboard.index') }}">
                        <img src="{{ asset('assets/dashboard/images/logo.svg') }}" alt="Logo" height="32" class="d-inline-block align-text-top me-2">
                        <span class="h4 mb-0 fw-bold text-primary-emphasis">Metis</span>
                    </a>

                    <!-- Sidebar Toggle -->
                    <button class="hamburger-menu" type="button" data-sidebar-toggle aria-label="Toggle sidebar">
                        <i class="bi bi-list"></i>
                    </button>

                    <!-- Search Bar with Alpine.js -->
                    <div class="search-container flex-grow-1 mx-4" x-data="searchComponent">
                        <div class="position-relative">
                            <input type="search"
                                   class="form-control"
                                   placeholder="Search... (Ctrl+K)"
                                   x-model="query"
                                   @input="search()"
                                   data-search-input
                                   aria-label="Search">
                            <i class="bi bi-search position-absolute top-50 end-0 translate-middle-y me-3"></i>

                            <div x-show="results.length > 0"
                                 x-transition:enter="transition ease-out duration-100"
                                 x-transition:enter-start="opacity-0 scale-95"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 class="position-absolute top-100 start-0 w-100 bg-white border rounded-2 shadow-lg mt-1 z-3">
                                <template x-for="result in results" :key="result.title">
                                    <a :href="result.url" class="d-block px-3 py-2 text-decoration-none text-dark border-bottom">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-file-text me-2 text-muted"></i>
                                            <span x-text="result.title"></span>
                                            <small class="ms-auto text-muted" x-text="result.type"></small>
                                        </div>
                                    </a>
                                </template>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side Icons -->
                    <div class="navbar-nav flex-row">
                        <!-- Theme Toggle -->
                        <div x-data="themeSwitch">
                            <button class="btn btn-outline-secondary me-2"
                                    type="button"
                                    @click="toggle()"
                                    data-bs-toggle="tooltip"
                                    data-bs-placement="bottom"
                                    title="Toggle theme">
                                <i class="bi bi-sun-fill" x-show="currentTheme === 'light'"></i>
                                <i class="bi bi-moon-fill" x-show="currentTheme === 'dark'"></i>
                            </button>
                        </div>

                        <!-- Fullscreen Toggle -->
                        <button class="btn btn-outline-secondary me-2 d-none d-lg-inline-block"
                                type="button"
                                data-fullscreen-toggle
                                data-bs-toggle="tooltip"
                                data-bs-placement="bottom"
                                title="Toggle fullscreen">
                            <i class="bi bi-arrows-fullscreen icon-hover"></i>
                        </button>

                        <!-- Notifications -->
                        <div class="dropdown me-2">
                            <button class="btn btn-outline-secondary position-relative"
                                    type="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                <i class="bi bi-bell"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                    3
                                </span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><h6 class="dropdown-header">Notifications</h6></li>
                                <li><a class="dropdown-item" href="#">New parent request</a></li>
                                <li><a class="dropdown-item" href="#">Vaccine stock low</a></li>
                                <li><a class="dropdown-item" href="#">Booking cancelled</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-center" href="#">View all notifications</a></li>
                            </ul>
                        </div>

                        <!-- User Menu -->
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary d-flex align-items-center"
                                    type="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                <img src="{{ asset('assets/dashboard/images/avatar-placeholder.svg') }}"
                                     alt="User Avatar"
                                     width="24"
                                     height="24"
                                     class="rounded-circle me-2">
                                <span class="d-none d-md-inline">{{ auth()->check() ? auth()->user()->name : 'Admin' }}</span>
                                <i class="bi bi-chevron-down ms-1"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ route('settings.profile') }}"><i class="bi bi-person me-2"></i>Profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('settings.system') }}"><i class="bi bi-gear me-2"></i>Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
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

        <!-- Sidebar -->
        <aside class="admin-sidebar" id="admin-sidebar">
            <div class="sidebar-content">
                <nav class="sidebar-nav">
                    <ul class="nav flex-column">

                        {{-- Dashboard --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('dashboard.index') ? 'active' : '' }}" href="{{ route('dashboard.index') }}">
                                <i class="bi bi-speedometer2"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        {{-- Child Management --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('children.*') ? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#childManagement" aria-expanded="{{ request()->routeIs('children.*') ? 'true' : 'false' }}">
                                <i class="bi bi-person-hearts"></i>
                                <span>Child Management</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse {{ request()->routeIs('children.*') ? 'show' : '' }}" id="childManagement">
                                <ul class="nav nav-submenu">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('children.index') ? 'active' : '' }}" href="{{ route('children.index') }}">
                                            <i class="bi bi-people"></i>
                                            <span>All Children</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('children.create') ? 'active' : '' }}" href="{{ route('children.create') }}">
                                            <i class="bi bi-person-plus"></i>
                                            <span>Add Child</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        {{-- <a class="nav-link {{ request()->routeIs('children.profile') ? 'active' : '' }}" href="{{ route('children.profile') }}">
                                            <i class="bi bi-person-vcard"></i>
                                            <span>Child Profile</span>
                                        </a> --}}
                                    </li>
                                </ul>
                            </div>
                        </li>

                        {{-- Vaccination Schedule --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('vaccination-schedule.*') ? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#vaccinationSchedule" aria-expanded="{{ request()->routeIs('vaccination-schedule.*') ? 'true' : 'false' }}">
                                <i class="bi bi-calendar2-check"></i>
                                <span>Vaccination Schedule</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse {{ request()->routeIs('vaccination-schedule.*') ? 'show' : '' }}" id="vaccinationSchedule">
                                <ul class="nav nav-submenu">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('vaccination-schedule.today') ? 'active' : '' }}" href="{{ route('vaccination-schedule.today') }}">
                                            <i class="bi bi-calendar-day"></i>
                                            <span>Today's Vaccinations</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('vaccination-schedule.upcoming') ? 'active' : '' }}" href="{{ route('vaccination-schedule.upcoming') }}">
                                            <i class="bi bi-calendar-week"></i>
                                            <span>Upcoming Vaccinations</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('vaccination-schedule.calendar') ? 'active' : '' }}" href="{{ route('vaccination-schedule.calendar') }}">
                                            <i class="bi bi-calendar3"></i>
                                            <span>Vaccination Calendar</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        {{-- Vaccine Management --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('vaccines.*') ? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#vaccineManagement" aria-expanded="{{ request()->routeIs('vaccines.*') ? 'true' : 'false' }}">
                                <i class="bi bi-shield-plus"></i>
                                <span>Vaccine Management</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse {{ request()->routeIs('vaccines.*') ? 'show' : '' }}" id="vaccineManagement">
                                <ul class="nav nav-submenu">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('vaccines.index') ? 'active' : '' }}" href="{{ route('vaccines.index') }}">
                                            <i class="bi bi-list-ul"></i>
                                            <span>Vaccine List</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('vaccines.availability') ? 'active' : '' }}" href="{{ route('vaccines.availability') }}">
                                            <i class="bi bi-check-circle"></i>
                                            <span>Vaccine Availability</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('vaccines.inventory') ? 'active' : '' }}" href="{{ route('vaccines.inventory') }}">
                                            <i class="bi bi-box-seam"></i>
                                            <span>Vaccine Inventory</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        {{-- Hospital Management --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('hospitals.*') ? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#hospitalManagement" aria-expanded="{{ request()->routeIs('hospitals.*') ? 'true' : 'false' }}">
                                <i class="bi bi-hospital"></i>
                                <span>Hospital Management</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse {{ request()->routeIs('hospitals.*') ? 'show' : '' }}" id="hospitalManagement">
                                <ul class="nav nav-submenu">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('hospitals.index') ? 'active' : '' }}" href="{{ route('hospitals.index') }}">
                                            <i class="bi bi-buildings"></i>
                                            <span>All Hospitals</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('hospitals.create') ? 'active' : '' }}" href="{{ route('hospitals.create') }}">
                                            <i class="bi bi-hospital-fill"></i>
                                            <span>Add Hospital</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('hospitals.manage') ? 'active' : '' }}" href="{{ route('hospitals.manage') }}">
                                            <i class="bi bi-pencil-square"></i>
                                            <span>Manage Hospitals</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        {{-- Booking Management --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('bookings.*') ? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#bookingManagement" aria-expanded="{{ request()->routeIs('bookings.*') ? 'true' : 'false' }}">
                                <i class="bi bi-journal-check"></i>
                                <span>Booking Management</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse {{ request()->routeIs('bookings.*') ? 'show' : '' }}" id="bookingManagement">
                                <ul class="nav nav-submenu">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('bookings.details') ? 'active' : '' }}" href="{{ route('bookings.details') }}">
                                            <i class="bi bi-card-list"></i>
                                            <span>Booking Details</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('bookings.upcoming') ? 'active' : '' }}" href="{{ route('bookings.upcoming') }}">
                                            <i class="bi bi-clock-history"></i>
                                            <span>Upcoming Bookings</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('bookings.completed') ? 'active' : '' }}" href="{{ route('bookings.completed') }}">
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Completed Bookings</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('bookings.cancelled') ? 'active' : '' }}" href="{{ route('bookings.cancelled') }}">
                                            <i class="bi bi-x-circle"></i>
                                            <span>Cancelled / Missed</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        {{-- Parent Requests --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('parent-requests.*') ? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#parentRequests" aria-expanded="{{ request()->routeIs('parent-requests.*') ? 'true' : 'false' }}">
                                <i class="bi bi-envelope-check"></i>
                                <span>Parent Requests</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse {{ request()->routeIs('parent-requests.*') ? 'show' : '' }}" id="parentRequests">
                                <ul class="nav nav-submenu">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('parent-requests.pending') ? 'active' : '' }}" href="{{ route('parent-requests.pending') }}">
                                            <i class="bi bi-hourglass-split"></i>
                                            <span>Pending Requests</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('parent-requests.approved') ? 'active' : '' }}" href="{{ route('parent-requests.approved') }}">
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>Approved Requests</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('parent-requests.rejected') ? 'active' : '' }}" href="{{ route('parent-requests.rejected') }}">
                                            <i class="bi bi-x-octagon-fill"></i>
                                            <span>Rejected Requests</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        {{-- Reports --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('reports.*') ? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#reportsMenu" aria-expanded="{{ request()->routeIs('reports.*') ? 'true' : 'false' }}">
                                <i class="bi bi-bar-chart-line"></i>
                                <span>Reports</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse {{ request()->routeIs('reports.*') ? 'show' : '' }}" id="reportsMenu">
                                <ul class="nav nav-submenu">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('reports.child') ? 'active' : '' }}" href="{{ route('reports.child') }}">
                                            <i class="bi bi-file-earmark-person"></i>
                                            <span>Child Report</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('reports.vaccination') ? 'active' : '' }}" href="{{ route('reports.vaccination') }}">
                                            <i class="bi bi-file-earmark-medical"></i>
                                            <span>Vaccination Report</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('reports.datewise') ? 'active' : '' }}" href="{{ route('reports.datewise') }}">
                                            <i class="bi bi-calendar-range"></i>
                                            <span>Date-wise Report</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        {{-- Divider --}}
                        <li class="nav-item mt-3">
                            <small class="text-muted px-3 text-uppercase fw-bold">Account</small>
                        </li>

                        {{-- Settings (now a dropdown) --}}
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('settings.*') ? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#settingsMenu" aria-expanded="{{ request()->routeIs('settings.*') ? 'true' : 'false' }}">
                                <i class="bi bi-gear"></i>
                                <span>Settings</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse {{ request()->routeIs('settings.*') ? 'show' : '' }}" id="settingsMenu">
                                <ul class="nav nav-submenu">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('settings.profile') ? 'active' : '' }}" href="{{ route('settings.profile') }}">
                                            <i class="bi bi-person-badge"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('settings.password') ? 'active' : '' }}" href="{{ route('settings.password') }}">
                                            <i class="bi bi-key"></i>
                                            <span>Change Password</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('settings.system') ? 'active' : '' }}" href="{{ route('settings.system') }}">
                                            <i class="bi bi-sliders"></i>
                                            <span>System Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        {{-- Logout --}}
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="nav-link text-danger border-0 bg-transparent w-100 text-start">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Sidebar Backdrop (mobile overlay) -->
        <div class="sidebar-backdrop" aria-hidden="true"></div>

        <!-- Main Content -->
        <main id="main-content" class="admin-main">
            <div class="container-fluid p-4 p-lg-4">
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
    <div aria-live="polite" aria-atomic="true" class="position-fixed top-0 end-0 p-3" style="z-index: 11">
        <div id="toast-container"></div>
    </div>

    @stack('modals')
    @stack('scripts')
</body>
</html>
