@extends('dashboard._mastertheme')

@section('title', 'Dashboard')

@section('body')


    <div class="container-fluid py-4 px-3 px-md-4" style="max-width: 100%;">

        <!-- Main Card -->
        <div class="card card-custom p-3 p-md-4">

            <!-- Header -->
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-teal-50 rounded-3 d-flex align-items-center justify-content-center"
                        style="width: 42px; height: 42px;">
                        <i class="fas fa-calendar-check text-teal-600 fs-5"></i>
                    </div>
                    <div>
                        <h1 class="h3 fw-bold text-slate-800 mb-0">Booking Details</h1>
                        <p class="text-muted small mb-0">Manage and track all appointments</p>
                    </div>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <a href="#" class="btn btn-teal d-flex align-items-center gap-2">
                        <i class="fas fa-plus-circle"></i> New Booking
                    </a>
                    <button class="btn btn-outline-secondary d-flex align-items-center gap-2">
                        <i class="fas fa-file-export text-success"></i> Export
                    </button>
                </div>
            </div>

            <!-- Filters -->
            <div class="filter-section row g-2 mb-3">
                <div class="col-md-3 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="fas fa-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0 ps-0"
                            placeholder="Search by Child or Booking #" />
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <select class="form-select">
                        <option value="">All Hospitals</option>
                        <option value="City Clinic">City Clinic</option>
                        <option value="National Hospital">National Hospital</option>
                        <option value="Memorial Hospital">Memorial Hospital</option>
                    </select>
                </div>
                <div class="col-md-2 col-sm-6">
                    <select class="form-select">
                        <option value="">All Status</option>
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                        <option value="completed">Completed</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-6">
                    <input type="date" class="form-control" placeholder="Date" />
                </div>
                <div class="col-md-2 col-sm-6">
                    <button class="btn btn-teal w-100 d-flex align-items-center justify-content-center gap-1">
                        <i class="fas fa-sliders-h"></i> Apply
                    </button>
                </div>
            </div>

            <!-- Table - Only IMPORTANT columns on front -->
            <div class="table-responsive rounded-3 border">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th style="width: 60px;">#</th>
                            <th style="min-width: 100px;">Booking #</th>
                            <th style="min-width: 120px;">Child</th>
                            <th style="min-width: 120px;">Vaccine</th>
                            <th style="min-width: 130px;">Hospital</th>
                            <th style="min-width: 100px;">Preferred Date</th>
                            <th style="width: 90px;">Time</th>
                            <th style="min-width: 130px;">Reason</th>
                            <th style="width: 100px;">Status</th>
                            <th style="width: 140px;" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <td class="text-muted small">1</td>
                            <td class="text-muted font-monospace small">#BK-001</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="child-avatar-sm bg-child-1">AK</span>
                                    <span class="fw-semibold">Ayesha Khan</span>
                                </div>
                            </td>
                            <td>DTaP</td>
                            <td>City Clinic</td>
                            <td class="text-secondary small text-nowrap">2024-08-20</td>
                            <td class="text-secondary small">10:30 AM</td>
                            <td class="text-secondary small">Routine vaccination</td>
                            <td><span class="badge badge-pending fw-normal"><span
                                        class="status-indicator status-pending"></span>Pending</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-link text-primary p-1" title="View Details"
                                        data-bs-toggle="modal" data-bs-target="#viewBookingModal"><i
                                            class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-link text-success p-1" title="Approve"><i
                                            class="fas fa-check-circle"></i></button>
                                    <button class="btn btn-sm btn-link text-teal p-1" title="Edit"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-link text-danger p-1" title="Cancel"><i
                                            class="fas fa-times-circle"></i></button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr>
                            <td class="text-muted small">2</td>
                            <td class="text-muted font-monospace small">#BK-002</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="child-avatar-sm bg-child-2">MA</span>
                                    <span class="fw-semibold">Muhammad Ali</span>
                                </div>
                            </td>
                            <td>IPV (Polio)</td>
                            <td>National Hospital</td>
                            <td class="text-secondary small text-nowrap">2024-08-20</td>
                            <td class="text-secondary small">11:00 AM</td>
                            <td class="text-secondary small">Follow-up dose</td>
                            <td><span class="badge badge-approved fw-normal"><span
                                        class="status-indicator status-approved"></span>Approved</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-link text-primary p-1" title="View Details"
                                        data-bs-toggle="modal" data-bs-target="#viewBookingModal"><i
                                            class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-link text-success p-1" title="Approve"><i
                                            class="fas fa-check-circle"></i></button>
                                    <button class="btn btn-sm btn-link text-teal p-1" title="Edit"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-link text-danger p-1" title="Cancel"><i
                                            class="fas fa-times-circle"></i></button>
                                </div>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>


        </div>
    </div>


@endsection