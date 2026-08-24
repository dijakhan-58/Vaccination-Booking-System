<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="referrer" content="strict-origin-when-cross-origin">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta name="description" content="Vaccination Booking System - Admin Dashboard">
    <meta name="author" content="Vaccination Booking System">

    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/dashboard/images/care4kids_logo.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">


    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>@yield('title', 'Dashboard') - Vaccination Booking System</title>


    <meta name="theme-color" content="#6366f1">


    <link rel="manifest" href="{{ asset('assets/manifest-DTaoG9pG.json') }}">

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


    <div id="loading-screen" class="loading-screen">
        <div class="loading-spinner">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="admin-wrapper" id="admin-wrapper">


     <header class="admin-header shadow-sm sticky-top bg-white border-bottom">
    <nav class="navbar navbar-expand-lg navbar-light py-2 px-3">
        <div class="container-fluid p-0">

            <div class="d-flex align-items-center">

                <button class="hamburger-menu me-2" type="button" data-sidebar-toggle aria-label="Toggle sidebar">
                    <i class="bi bi-list fs-4"></i>
                </button>

                <a class="navbar-brand d-flex align-items-center me-3 gap-2" href="{{ route('dashboard') }}">
                    <img src="{{ asset('assets/dashboard/images/care4kids_logo.jpeg') }}" alt="Care4Kids Logo"
                        style="height: 36px; width: auto; object-fit: contain;" class="rounded flex-shrink-0">
                    <span class="h5 mb-0 fw-bold text-success tracking-tight">
                        Care4Kids
                    </span>
                </a>
            </div>

            <div class="d-flex align-items-center ms-auto gap-2">

                <div class="dropdown dropdown-hover">
                    <button
                        class="btn btn-light rounded-circle position-relative d-flex align-items-center justify-content-center p-0 border-0 shadow-none"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false"
                        style="width: 40px; height: 40px; background-color: #f8f9fa;">
                        <i class="bi bi-bell fs-5 text-secondary"></i>
                        @if ($headerPendingCount > 0)
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger border border-light p-1"
                                style="font-size: 10px; margin-top: 6px; margin-left: -6px;">
                                {{ $headerPendingCount }}
                                <span class="visually-hidden">unread notifications</span>
                            </span>
                        @endif
                    </button>

                    <div class="dropdown-menu dropdown-menu-end shadow-lg border-0 rounded-4 mt-2 p-0 overflow-hidden"
                        style="min-width: 320px;">

                        <div class="d-flex align-items-center justify-content-between p-3 bg-light border-bottom">
                            <h6 class="fw-bold mb-0 text-dark">Notifications</h6>
                            @if ($headerPendingCount > 0)
                                <span class="badge bg-primary-subtle text-primary fw-semibold rounded-pill px-2 py-1">
                                    {{ $headerPendingCount }} Pending
                                </span>
                            @endif
                        </div>

                        <div class="list-group list-group-flush small" style="max-height: 280px; overflow-y: auto;">
                            @forelse ($headerPendingBookings as $booking)
                                <a class="list-group-item list-group-item-action d-flex align-items-start gap-3 py-3 px-3"
                                    href="{{ route('parent_index') }}">
                                    <div class="bg-warning-subtle text-warning rounded-circle p-2 d-flex align-items-center justify-content-center flex-shrink-0"
                                        style="width: 36px; height: 36px;">
                                        <i class="bi bi-calendar-check fs-6"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-semibold text-dark">
                                            New appointment request — {{ $booking->child->first_name ?? 'Unknown' }}
                                        </p>
                                        <small class="text-muted">{{ $booking->created_at->diffForHumans() }}</small>
                                    </div>
                                </a>
                            @empty
                                <div class="p-3 text-center text-muted small">No pending requests.</div>
                            @endforelse
                        </div>

                        <div class="p-2 text-center bg-light border-top">
                            <a class="text-primary text-decoration-none fw-semibold small" href="{{ route('parent_index') }}">
                                View all appointment requests
                            </a>
                        </div>
                    </div>
                </div>

          
                <div class="dropdown">
                    <button
                        class="btn btn-light rounded-pill d-flex align-items-center p-1 pe-3 border-0 shadow-none gap-2"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false"
                        style="background-color: #f8f9fa;">

                        <img src="{{ asset('assets/dashboard/images/avatar-placeholder.svg') }}"
                            alt="User Avatar" width="32" height="32"
                            class="rounded-circle border border-2 border-white shadow-sm">

                        <span class="d-none d-md-inline fw-semibold text-dark small">
                            {{ auth()->check() ? auth()->user()->name : 'Admin' }}
                        </span>

                        <i class="bi bi-chevron-down text-muted small ms-1"></i>
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 rounded-3 mt-2 p-2"
                        style="min-width: 200px;">

                        <li class="px-3 py-2 border-bottom mb-1">
                            <div class="fw-bold text-dark">
                                {{ auth()->check() ? auth()->user()->name : 'Admin User' }}</div>
                            <div class="text-muted extra-small">
                                {{ auth()->check() ? auth()->user()->email : 'admin@care4kids.com' }}</div>
                        </li>

                        <li>
                            <hr class="dropdown-divider my-1">
                        </li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="dropdown-item rounded-2 py-2 text-danger d-flex align-items-center gap-2">
                                    <i class="bi bi-box-arrow-right fs-6"></i>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>



        <aside class="admin-sidebar" id="admin-sidebar">
            <div class="sidebar-content">
                <nav class="sidebar-nav">
                    <ul class="nav flex-column gap-1" id="sidebarAccordion">
                        @can('view dashboard')
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                                    href="{{ route('dashboard') }}">
                                    <i class="bi bi-speedometer2"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                        @endcan
                        @canany(['create role', 'fetch roles', 'viewall roles', 'edit roles', 'delete roles'])
                            @php $roleActive = request()->routeIs('role_create') || request()->routeIs('role_view') || request()->routeIs('role_edit'); @endphp
                            <li class="nav-item">
                                <a class="nav-link {{ $roleActive ? 'active' : 'collapsed' }}" href="#"
                                    data-bs-toggle="collapse" data-bs-target="#roleManagement"
                                    data-bs-parent="#sidebarAccordion"
                                    aria-expanded="{{ $roleActive ? 'true' : 'false' }}">
                                    <i class="bi bi-person-badge"></i>
                                    <span>Role Management</span>
                                    <i class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <div class="collapse {{ $roleActive ? 'show' : '' }}" id="roleManagement"
                                    data-bs-parent="#sidebarAccordion">
                                    <ul class="nav nav-submenu flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('role_create') ? 'active' : '' }}"
                                                href="{{ route('role_create') }}">
                                                <i class="bi bi-plus-circle"></i><span>Add Role</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('role_view') ? 'active' : '' }}"
                                                href="{{ route('role_view') }}">
                                                <i class="bi bi-list-ul"></i><span>Fetch Role</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endcanany
                        @canany(['create user', 'fetch users', 'viewall users', 'edit users', 'delete users'])
                            @php $userActive = request()->routeIs('user_create') || request()->routeIs('user_view') || request()->routeIs('user_edit'); @endphp
                            <li class="nav-item">
                                <a class="nav-link {{ $userActive ? 'active' : 'collapsed' }}" href="#"
                                    data-bs-toggle="collapse" data-bs-target="#userManagement"
                                    data-bs-parent="#sidebarAccordion"
                                    aria-expanded="{{ $userActive ? 'true' : 'false' }}">
                                    <i class="bi bi-people"></i>
                                    <span>User Management</span>
                                    <i class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <div class="collapse {{ $userActive ? 'show' : '' }}" id="userManagement"
                                    data-bs-parent="#sidebarAccordion">
                                    <ul class="nav nav-submenu flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('user_create') ? 'active' : '' }}"
                                                href="{{ route('user_create') }}">
                                                <i class="bi bi-person-plus"></i><span>Add User</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('user_view') ? 'active' : '' }}"
                                                href="{{ route('user_view') }}">
                                                <i class="bi bi-list-ul"></i><span>Fetch User</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endcanany


                        @canany([
                            'create hospital',
                            'fetch hospitals',
                            'viewall hospitals',
                            'edit hospitals',
                            'delete
                            hospitals',
                            ])
                            @php $hospitalActive = request()->routeIs('hospitals.*'); @endphp
                            <li class="nav-item">
                                <a class="nav-link {{ $hospitalActive ? 'active' : 'collapsed' }}" href="#"
                                    data-bs-toggle="collapse" data-bs-target="#hospitalManagement"
                                    data-bs-parent="#sidebarAccordion"
                                    aria-expanded="{{ $hospitalActive ? 'true' : 'false' }}">
                                    <i class="bi bi-hospital"></i>
                                    <span>Hospital Management</span>
                                    <i class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <div class="collapse {{ $hospitalActive ? 'show' : '' }}" id="hospitalManagement"
                                    data-bs-parent="#sidebarAccordion">
                                    <ul class="nav nav-submenu flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('hospitals.add') ? 'active' : '' }}"
                                                href="{{ route('hospitals.add') }}">
                                                <i class="bi bi-hospital-fill"></i><span>Add Hospital</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('hospitals.fetch') ? 'active' : '' }}"
                                                href="{{ route('hospitals.fetch') }}">
                                                <i class="bi bi-buildings"></i><span>Fetch Hospital</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endcanany
                        @canany([
                            'create children',
                            'fetch children',
                            'viewall children',
                            'edit children',
                            'delete
                            children',
                            ])
                            @php $childActive = request()->routeIs('children.*'); @endphp
                            <li class="nav-item">
                                <a class="nav-link {{ $childActive ? 'active' : 'collapsed' }}" href="#"
                                    data-bs-toggle="collapse" data-bs-target="#childManagement"
                                    data-bs-parent="#sidebarAccordion"
                                    aria-expanded="{{ $childActive ? 'true' : 'false' }}">
                                    <i class="bi bi-person-hearts"></i>
                                    <span>Child Management</span>
                                    <i class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <div class="collapse {{ $childActive ? 'show' : '' }}" id="childManagement"
                                    data-bs-parent="#sidebarAccordion">
                                    <ul class="nav nav-submenu flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('children.add') ? 'active' : '' }}"
                                                href="{{ route('children.add') }}">
                                                <i class="bi bi-person-plus"></i><span>Add Child</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('children.index') ? 'active' : '' }}"
                                                href="{{ route('children.index') }}">
                                                <i class="bi bi-people"></i><span>Fetch Child</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endcanany

                        @canany([
                            'create vaccines',
                            'fetch vaccines',
                            'viewall vaccines',
                            'edit vaccines',
                            'delete
                            vaccines',
                            ])
                            @php $vaccineActive = request()->routeIs('vaccines.*'); @endphp
                            <li class="nav-item">
                                <a class="nav-link {{ $vaccineActive ? 'active' : 'collapsed' }}" href="#"
                                    data-bs-toggle="collapse" data-bs-target="#vaccineManagement"
                                    data-bs-parent="#sidebarAccordion"
                                    aria-expanded="{{ $vaccineActive ? 'true' : 'false' }}">
                                    <i class="bi bi-shield-plus"></i>
                                    <span>Vaccine Management</span>
                                    <i class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <div class="collapse {{ $vaccineActive ? 'show' : '' }}" id="vaccineManagement"
                                    data-bs-parent="#sidebarAccordion">
                                    <ul class="nav nav-submenu flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('vaccines.add') ? 'active' : '' }}"
                                                href="{{ route('vaccines.add') }}">
                                                <i class="bi bi-plus-circle"></i><span>Add Vaccine</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('vaccines.index') ? 'active' : '' }}"
                                                href="{{ route('vaccines.index') }}">
                                                <i class="bi bi-list-ul"></i><span>Fetch Vaccine</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endcanany
                        @canany(['upcomming vaccines view'])
                            @php $upcomingVaccineActive = request()->routeIs('upcoming_index'); @endphp
                            <li class="nav-item">
                                <a class="nav-link {{ $upcomingVaccineActive ? 'active' : 'collapsed' }}" href="#"
                                    data-bs-toggle="collapse" data-bs-target="#upcomingVaccination"
                                    data-bs-parent="#sidebarAccordion"
                                    aria-expanded="{{ $upcomingVaccineActive ? 'true' : 'false' }}">
                                    <i class="bi bi-calendar-week"></i>
                                    <span>Upcoming Vaccination</span>
                                    <i class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <div class="collapse {{ $upcomingVaccineActive ? 'show' : '' }}" id="upcomingVaccination"
                                    data-bs-parent="#sidebarAccordion">
                                    <ul class="nav nav-submenu flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('upcoming_index') ? 'active' : '' }}"
                                                href="{{ route('upcoming_index') }}">
                                                <i class="bi bi-list-ul"></i><span>Fetch Upcoming Vaccination</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endcanany
                        @canany([
                            'vaccination report generate',
                            'vaccination report view',
                            'vaccination report
                            viewsingle',
                            ])
                            @php $reportActive = request()->routeIs('vaccin_report_*'); @endphp
                            <li class="nav-item">
                                <a class="nav-link {{ $reportActive ? 'active' : 'collapsed' }}" href="#"
                                    data-bs-toggle="collapse" data-bs-target="#vaccinationReport"
                                    data-bs-parent="#sidebarAccordion"
                                    aria-expanded="{{ $reportActive ? 'true' : 'false' }}">
                                    <i class="bi bi-file-earmark-medical"></i>
                                    <span>Vaccination Report</span>
                                    <i class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <div class="collapse {{ $reportActive ? 'show' : '' }}" id="vaccinationReport"
                                    data-bs-parent="#sidebarAccordion">
                                    <ul class="nav nav-submenu flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('vaccin_report_add') ? 'active' : '' }}"
                                                href="{{ route('vaccin_report_add') }}">
                                                <i class="bi bi-plus-circle"></i><span>Add Report</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('vaccin_report_index') ? 'active' : '' }}"
                                                href="{{ route('vaccin_report_index') }}">
                                                <i class="bi bi-list-ul"></i><span>Fetch Report</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endcanany
                        @canany(['vaccination status view', 'vaccination status edit', 'vaccination status delete'])
                            @php $statusActive = request()->routeIs('vaccine_status_index') || request()->routeIs('vaccine_status.*'); @endphp
                            <li class="nav-item">
                                <a class="nav-link {{ $statusActive ? 'active' : 'collapsed' }}" href="#"
                                    data-bs-toggle="collapse" data-bs-target="#vaccinationStatus"
                                    data-bs-parent="#sidebarAccordion"
                                    aria-expanded="{{ $statusActive ? 'true' : 'false' }}">
                                    <i class="bi bi-clipboard2-pulse"></i>
                                    <span>Vaccination Status</span>
                                    <i class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <div class="collapse {{ $statusActive ? 'show' : '' }}" id="vaccinationStatus"
                                    data-bs-parent="#sidebarAccordion">
                                    <ul class="nav nav-submenu flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('vaccine_status_index') ? 'active' : '' }}"
                                                href="{{ route('vaccine_status_index') }}">
                                                <i class="bi bi-list-ul"></i><span>Fetch Vaccination Status</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endcanany
                        @canany([
                            'parent appointment request view',
                            'parent appointment request edit',
                            'parent
                            appointment request delete',
                            ])
                            @php $parentReqActive = request()->routeIs('parent_index'); @endphp
                            <li class="nav-item">
                                <a class="nav-link {{ $parentReqActive ? 'active' : 'collapsed' }}" href="#"
                                    data-bs-toggle="collapse" data-bs-target="#parentAppointmentRequest"
                                    data-bs-parent="#sidebarAccordion"
                                    aria-expanded="{{ $parentReqActive ? 'true' : 'false' }}">
                                    <i class="bi bi-envelope-check"></i>
                                    <span>Parent Appointment Request</span>
                                    <i class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <div class="collapse {{ $parentReqActive ? 'show' : '' }}" id="parentAppointmentRequest"
                                    data-bs-parent="#sidebarAccordion">
                                    <ul class="nav nav-submenu flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('parent_index') ? 'active' : '' }}"
                                                href="{{ route('parent_index') }}">
                                                <i class="bi bi-list-ul"></i><span>Fetch Appointment Request</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endcanany


                        @php $bookingActive = request()->routeIs('bookings.*'); @endphp
                        <li class="nav-item">
                            <a class="nav-link {{ $bookingActive ? 'active' : 'collapsed' }}" href="#"
                                data-bs-toggle="collapse" data-bs-target="#bookingDetail"
                                data-bs-parent="#sidebarAccordion"
                                aria-expanded="{{ $bookingActive ? 'true' : 'false' }}">
                                <i class="bi bi-card-list"></i>
                                <span>Booking Detail</span>
                                <i class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <div class="collapse {{ $bookingActive ? 'show' : '' }}" id="bookingDetail"
                                data-bs-parent="#sidebarAccordion">
                                <ul class="nav nav-submenu flex-column">
                                   
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->routeIs('bookings.index') ? 'active' : '' }}"
                                            href="{{ route('bookings.index') }}">
                                            <i class="bi bi-list-ul"></i><span>Fetch Booking Detail</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @canany([
                            'upcomming vaccination status',
                            'upcomming vaccination edit',
                            'upcomming vaccination
                            delete',
                            ])
                            @php $upcomingStatusActive = request()->routeIs('upcoming_vaccine_status_index'); @endphp
                            <li class="nav-item">
                                <a class="nav-link {{ $upcomingStatusActive ? 'active' : 'collapsed' }}" href="#"
                                    data-bs-toggle="collapse" data-bs-target="#upcomingVaccineStatus"
                                    data-bs-parent="#sidebarAccordion"
                                    aria-expanded="{{ $upcomingStatusActive ? 'true' : 'false' }}">
                                    <i class="bi bi-clock-history"></i>
                                    <span>Upcoming Vaccine Status</span>
                                    <i class="bi bi-chevron-down ms-auto"></i>
                                </a>
                                <div class="collapse {{ $upcomingStatusActive ? 'show' : '' }}"
                                    id="upcomingVaccineStatus" data-bs-parent="#sidebarAccordion">
                                    <ul class="nav nav-submenu flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link {{ request()->routeIs('upcoming_vaccine_status_index') ? 'active' : '' }}"
                                                href="{{ route('upcoming_vaccine_status_index') }}">
                                                <i class="bi bi-list-ul"></i><span>Fetch Upcoming Vaccine Status</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endcanany
                        {{-- @can('profile')
                            <!-- 13. Profile -->
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-person-badge"></i>
                                    <span>Profile</span>
                                </a>
                            </li>
                        @endcan --}}

                    </ul>
                </nav>
            </div>
        </aside>

        <div class="sidebar-backdrop" id="sidebar-backdrop" aria-hidden="true"></div>

        <main id="main-content" class="admin-main">
            <div class="container-fluid p-4">
                @yield('body')
            </div>
        </main>



    </div>


    <div aria-live="polite" aria-atomic="true" class="position-fixed top-0 end-0 p-3" style="z-index: 1050">
        <div id="toast-container"></div>
    </div>

    @stack('modals')

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const loadingScreen = document.getElementById('loading-screen');
            if (loadingScreen) {
                loadingScreen.style.display = 'none';
            }

            const sidebar = document.getElementById('admin-sidebar');
            const backdrop = document.getElementById('sidebar-backdrop');
            let toggle = document.querySelector('[data-sidebar-toggle]');

            if (!sidebar || !toggle || !backdrop) return;

       
     
            const cleanToggle = toggle.cloneNode(true);
            toggle.parentNode.replaceChild(cleanToggle, toggle);
            toggle = cleanToggle;

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
                e.stopImmediatePropagation();
                sidebar.classList.contains('show') ? closeSidebar() : openSidebar();
            });

            backdrop.addEventListener('click', closeSidebar);

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
