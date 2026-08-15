@extends('dashboard._mastertheme')


@section('body')


    <div class="container-fluid py-4 px-3 px-md-4" style="max-width: 100%;">

        <!-- Main Card -->
        <div class="card card-custom p-3 p-md-4">

            <!-- Header -->
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-teal-50 rounded-3 d-flex align-items-center justify-content-center"
                        style="width: 42px; height: 42px;">
                        <i class="fas fa-hourglass-half text-teal-600 fs-5"></i>
                    </div>
                    <div>
                        <h1 class="h3 fw-bold text-slate-800 mb-0">Parent Requests</h1>
                        <p class="text-muted small mb-0">Pending vaccination requests from parents</p>
                    </div>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <span class="badge bg-warning-subtle text-warning-emphasis d-flex align-items-center gap-2 px-3 py-2">
                        <i class="fas fa-hourglass-half"></i> Pending: 8
                    </span>
                </div>
            </div>

            <!-- Filters -->
            <div class="filter-section row g-2 mb-3">
                <div class="col-md-4 col-sm-12">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="fas fa-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0 ps-0"
                            placeholder="Search by Child or Parent" />
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <select class="form-select">
                        <option value="">All Hospitals</option>
                        <option value="City Clinic">City Clinic</option>
                        <option value="National Hospital">National Hospital</option>
                        <option value="Memorial Hospital">Memorial Hospital</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-6">
                    <input type="date" class="form-control" placeholder="Preferred Date" />
                </div>
                <div class="col-md-2 col-sm-12">
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
                            <th style="width: 60px;">ID</th>
                            <th style="width: 110px;">Booking #</th>
                            <th style="min-width: 120px;">Child</th>
                            <th style="min-width: 130px;">Parent</th>
                            <th style="min-width: 110px;">Vaccine</th>
                            <th style="min-width: 130px;">Hospital</th>
                            <th style="min-width: 100px;">Preferred Date</th>
                            <th style="min-width: 150px;">Reason</th>
                            <th style="width: 170px;" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <td class="text-muted font-monospace small">1</td>
                            <td><span class="booking-number-badge">BK-2024-003</span></td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="child-avatar-sm bg-child-1">AK</span>
                                    <span class="fw-semibold">Ayesha Khan</span>
                                </div>
                            </td>
                            <td class="text-secondary">Kamran Khan</td>
                            <td>DTaP</td>
                            <td><span class="hospital-badge-sm"><i class="fas fa-hospital me-1"></i> City Clinic</span></td>
                            <td class="text-secondary small text-nowrap">2024-08-28</td>
                            <td class="text-secondary small">Routine vaccination</td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-success d-flex align-items-center gap-1" title="Approve">
                                        <i class="fas fa-check"></i> Approve
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger d-flex align-items-center gap-1"
                                        title="Reject">
                                        <i class="fas fa-times"></i> Reject
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr>
                            <td class="text-muted font-monospace small">2</td>
                            <td><span class="booking-number-badge">BK-2024-004</span></td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="child-avatar-sm bg-child-2">MA</span>
                                    <span class="fw-semibold">Muhammad Ali</span>
                                </div>
                            </td>
                            <td class="text-secondary">Imran Ali</td>
                            <td>MMR</td>
                            <td><span class="hospital-badge-sm"><i class="fas fa-hospital me-1"></i> National
                                    Hospital</span></td>
                            <td class="text-secondary small text-nowrap">2024-08-29</td>
                            <td class="text-secondary small">Follow-up dose</td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-success d-flex align-items-center gap-1" title="Approve">
                                        <i class="fas fa-check"></i> Approve
                                    </button>
                                    <button class="btn btn-sm btn-outline-danger d-flex align-items-center gap-1"
                                        title="Reject">
                                        <i class="fas fa-times"></i> Reject
                                    </button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>


@endsection