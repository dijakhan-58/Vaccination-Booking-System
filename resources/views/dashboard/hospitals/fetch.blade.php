@extends('dashboard._mastertheme')

@section('title', 'Dashboard')

@section('body')



    <div class="container-fluid py-4 px-3 px-md-4" style="max-width: 1400px;">

        <!-- Main Card -->
        <div class="card card-custom p-3 p-md-4">

            <!-- Header -->
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-teal-50 rounded-3 d-flex align-items-center justify-content-center"
                        style="width: 42px; height: 42px;">
                        <i class="fas fa-hospital text-teal-600 fs-5"></i>
                    </div>
                    <div>
                        <h1 class="h3 fw-bold text-slate-800 mb-0">All Hospitals</h1>
                        <p class="text-muted small mb-0">Manage and track all hospital records</p>
                    </div>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <a href="#" class="btn btn-teal d-flex align-items-center gap-2">
                        <i class="fas fa-plus-circle"></i> Add Hospital
                    </a>

                </div>
            </div>

            <!-- Filters -->
            <div class="filter-section row g-2 mb-3">
                <div class="col-md-4 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="fas fa-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0 ps-0"
                            placeholder="Search by Hospital Name or City" />
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <select class="form-select">
                        <option value="">All Cities</option>
                        <option value="Lahore">Lahore</option>
                        <option value="Karachi">Karachi</option>
                        <option value="Islamabad">Islamabad</option>
                        <option value="Rawalpindi">Rawalpindi</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-6">
                    <select class="form-select">
                        <option value="">All Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                        <option value="pending">Pending</option>
                    </select>
                </div>
                <div class="col-md-2 col-sm-6">
                    <button class="btn btn-teal w-100 d-flex align-items-center justify-content-center gap-1">
                        <i class="fas fa-sliders-h"></i> Apply
                    </button>
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive rounded-3 border">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th style="width: 70px;">ID</th>
                            <th style="width: 70px;">Profile</th>
                            <th style="min-width: 160px;">Hospital Name</th>
                            <th style="min-width: 120px;">City</th>
                            <th style="min-width: 180px;">Address</th>
                            <th style="width: 90px;">Floors</th>
                            <th style="min-width: 140px;">Timings Slot</th>
                            <th style="width: 100px;">Status</th>
                            <th style="width: 150px;" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <td class="text-muted font-monospace small">1</td>
                            <td><img src="https://ui-avatars.com/api/?name=City+Clinic" class="rounded-circle" width="36"
                                    height="36" alt="City Clinic"></td>
                            <td class="fw-semibold">City Clinic</td>
                            <td>Lahore</td>
                            <td class="text-secondary small">123 Main Street, Lahore</td>
                            <td>4</td>
                            <td class="text-secondary small">9:00 AM - 9:00 PM</td>
                            <td><span class="badge badge-active fw-normal"><span
                                        class="status-indicator status-active"></span>Active</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-link text-primary p-1" title="View Details"
                                        data-bs-toggle="modal" data-bs-target="#viewHospitalModal"><i
                                            class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-link text-teal p-1" title="Edit"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-link text-danger p-1" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr>
                            <td class="text-muted font-monospace small">2</td>
                            <td><img src="https://ui-avatars.com/api/?name=Memorial+Hospital" class="rounded-circle"
                                    width="36" height="36" alt="Memorial Hospital"></td>
                            <td class="fw-semibold">Memorial Hospital</td>
                            <td>Karachi</td>
                            <td class="text-secondary small">456 Hospital Road, Karachi</td>
                            <td>6</td>
                            <td class="text-secondary small">8:00 AM - 10:00 PM</td>
                            <td><span class="badge badge-active fw-normal"><span
                                        class="status-indicator status-active"></span>Active</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-link text-primary p-1" title="View Details"
                                        data-bs-toggle="modal" data-bs-target="#viewHospitalModal"><i
                                            class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-link text-teal p-1" title="Edit"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-link text-danger p-1" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>



        </div>
    </div>

@endsection