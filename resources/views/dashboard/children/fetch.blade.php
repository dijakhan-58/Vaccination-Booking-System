@extends('dashboard._mastertheme')


@section('body')


    <div id="root" class="container-fluid px-3 px-md-4">
        <!-- Main Card -->
        <div class="card shadow-sm border-0 rounded-4 p-3 p-md-4">

            <!-- Header -->
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-teal-50 rounded-3 d-flex align-items-center justify-content-center"
                        style="width: 42px; height: 42px;">
                        <i class="fas fa-child text-teal-600 fs-5"></i>
                    </div>
                    <div>
                        <h1 class="h3 fw-bold text-slate-800 mb-0">All Children</h1>
                        <p class="text-muted small mb-0">Manage and track all child records</p>
                    </div>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <button class="btn btn-teal d-flex align-items-center gap-2">
                        <i class="fas fa-plus-circle"></i> Add New Child
                    </button>

                </div>
            </div>

            <!-- Filter Grid -->
            <div class="row g-2 mb-2">
                <div class="col-md-3 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="fas fa-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0 ps-0"
                            placeholder="Search by name or B-Form" />
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <select class="form-select">
                        <option value="">Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-6">
                    <select class="form-select">
                        <option value="">Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-6">
                    <input type="text" class="form-control" placeholder="Search by Parent" />
                </div>
            </div>

            <!-- Date Row -->
            <div class="bg-light p-2 p-md-3 rounded-3 d-flex flex-wrap align-items-center gap-2 mb-3 border">
                <span class="small fw-semibold text-secondary d-flex align-items-center gap-1">
                    <i class="fas fa-calendar-alt"></i> Date of Birth
                </span>
                <input type="date" class="form-control form-control-sm w-auto" style="min-width: 130px;" />
                <span class="text-muted small">—</span>
                <input type="date" class="form-control form-control-sm w-auto" style="min-width: 130px;" />
                <button class="btn btn-teal btn-sm d-flex align-items-center gap-1 ms-auto">
                    <i class="fas fa-sliders-h"></i> Apply
                </button>
            </div>

            <!-- Table -->
            <div class="table-responsive rounded-3 border">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="text-center" style="width: 50px;">ID</th>
                            <th style="width: 60px;">Image</th>
                            <th style="width: 150px;">Name</th>
                            <th style="width: 130px;">Parent</th>
                            <th style="width: 100px;">DOB</th>
                            <th style="width: 90px;">Gender</th>
                            <th style="width: 100px;">Blood Group</th>
                            <th style="width: 130px;">B-Form Number</th>
                            <th style="width: 90px;">Weight (kg)</th>
                            <th class="text-center" style="width: 160px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <td class="text-center text-muted font-monospace small">1</td>
                            <td>
                                <div class="avatar bg-teal-500 text-white d-flex align-items-center justify-content-center rounded-circle fw-semibold"
                                    style="width: 32px; height: 32px; font-size: 0.7rem;">AK</div>
                            </td>
                            <td class="fw-semibold">Ayesha Khan</td>
                            <td class="text-secondary">Fatima Khan</td>
                            <td class="text-secondary small text-nowrap">2024-01-15</td>
                            <td class="text-secondary">Female</td>
                            <td class="text-secondary">A+</td>
                            <td class="text-secondary font-monospace small">BF-2024-001</td>
                            <td class="text-secondary">4.20</td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-link text-teal p-1" title="View Profile"><i
                                            class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-link text-warning p-1" title="Edit"><i
                                            class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-link text-danger p-1" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>

                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mt-4">
                <div class="text-muted small">
                    Showing <span class="fw-semibold text-dark">1</span> to <span class="fw-semibold text-dark">6</span> of
                    <span class="fw-semibold text-dark">14</span> children
                </div>
                <div class="d-flex gap-1">
                    <button class="btn btn-outline-secondary btn-sm" disabled>
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="btn btn-teal btn-sm active">1</button>
                    <button class="btn btn-outline-secondary btn-sm">2</button>
                    <button class="btn btn-outline-secondary btn-sm">3</button>
                    <button class="btn btn-outline-secondary btn-sm">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <!-- Footer -->
            <div class="mt-3 pt-2 border-top d-flex justify-content-end">
                <div class="text-muted small d-flex gap-4">
                    <span><i class="fas fa-database me-1"></i> CHILDREN · USERS</span>
                    <span><i class="fas fa-check-circle text-teal-500 me-1"></i> 10 rows per page</span>
                </div>
            </div>
        </div>
    </div>




@endsection