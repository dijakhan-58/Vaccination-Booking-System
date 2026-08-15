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
                        <i class="fas fa-file-medical-alt text-teal-600 fs-5"></i>
                    </div>
                    <div>
                        <h1 class="h3 fw-bold text-slate-800 mb-0">Vaccination Report</h1>
                        <p class="text-muted small mb-0">Record of all administered vaccinations</p>
                    </div>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <button class="btn btn-outline-secondary d-flex align-items-center gap-2">
                        <i class="fas fa-print"></i> Print
                    </button>
                    <button class="btn btn-teal d-flex align-items-center gap-2">
                        <i class="fas fa-file-export"></i> Export
                    </button>
                </div>
            </div>

            <!-- Summary Cards -->
            <div class="row g-3 mb-4">
                <div class="col-md-3 col-sm-6">
                    <div class="p-3 rounded-3 border bg-light">
                        <p class="text-muted small mb-1">Total Records</p>
                        <h4 class="fw-bold mb-0">86</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="p-3 rounded-3 border bg-light">
                        <p class="text-muted small mb-1">Completed</p>
                        <h4 class="fw-bold mb-0 text-success">72</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="p-3 rounded-3 border bg-light">
                        <p class="text-muted small mb-1">Reaction Reported</p>
                        <h4 class="fw-bold mb-0 text-warning">9</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="p-3 rounded-3 border bg-light">
                        <p class="text-muted small mb-1">Follow-up Due</p>
                        <h4 class="fw-bold mb-0 text-danger">14</h4>
                    </div>
                </div>
            </div>

            <!-- Filters -->
            <div class="filter-section row g-2 mb-3">
                <div class="col-md-3 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="fas fa-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0 ps-0" placeholder="Search by Booking #" />
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <select class="form-select">
                        <option value="">All Status</option>
                        <option value="completed">Completed</option>
                        <option value="pending">Pending</option>
                        <option value="cancelled">Cancelled</option>
                    </select>
                </div>
                <div class="col-md-2 col-sm-6">
                    <select class="form-select">
                        <option value="">Dose Number</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="col-md-2 col-sm-6">
                    <input type="date" class="form-control" placeholder="Vaccination Date" />
                </div>
                <div class="col-md-2 col-sm-6">
                    <input type="date" class="form-control" placeholder="Next Dose Date" />
                </div>
                <div class="col-md-1 col-sm-6">
                    <button class="btn btn-teal w-100 d-flex align-items-center justify-content-center gap-1">
                        <i class="fas fa-sliders-h"></i>
                    </button>
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive rounded-3 border">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th style="width: 60px;">ID</th>
                            <th style="min-width: 100px;">Booking #</th>
                            <th style="min-width: 110px;">Vaccination Date</th>
                            <th style="width: 90px;">Dose #</th>
                            <th style="min-width: 110px;">Next Dose Date</th>
                            <th style="min-width: 130px;">Administered By</th>
                            <th style="width: 100px;">Status</th>
                            <th style="min-width: 150px;">Side Effects</th>
                            <th style="min-width: 150px;">Remarks</th>
                            <th style="width: 100px;" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <td class="text-muted small">1</td>
                            <td class="text-muted font-monospace small">#BK-001</td>
                            <td class="text-secondary small text-nowrap">2024-08-20</td>
                            <td><span class="badge bg-light text-dark fw-normal">1</span></td>
                            <td class="text-secondary small text-nowrap">2024-09-20</td>
                            <td class="text-secondary small">Dr. Sara Ahmed</td>
                            <td><span class="badge badge-completed fw-normal"><span
                                        class="status-indicator status-completed"></span>Completed</span></td>
                            <td class="text-secondary small">None reported</td>
                            <td class="text-secondary small">Tolerated well</td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-link text-primary p-1" title="View Details"
                                        data-bs-toggle="modal" data-bs-target="#viewRecordModal"><i
                                            class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-link text-teal p-1" title="Edit"><i
                                            class="fas fa-edit"></i></button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr>
                            <td class="text-muted small">2</td>
                            <td class="text-muted font-monospace small">#BK-002</td>
                            <td class="text-secondary small text-nowrap">2024-08-21</td>
                            <td><span class="badge bg-light text-dark fw-normal">2</span></td>
                            <td class="text-secondary small text-nowrap">2024-10-21</td>
                            <td class="text-secondary small">Dr. Bilal Khan</td>
                            <td><span class="badge badge-completed fw-normal"><span
                                        class="status-indicator status-completed"></span>Completed</span></td>
                            <td class="text-secondary small">Mild fever</td>
                            <td class="text-secondary small">Advised paracetamol</td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-link text-primary p-1" title="View Details"
                                        data-bs-toggle="modal" data-bs-target="#viewRecordModal"><i
                                            class="fas fa-eye"></i></button>
                                    <button class="btn btn-sm btn-link text-teal p-1" title="Edit"><i
                                            class="fas fa-edit"></i></button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mt-4">
                <div class="text-muted small">
                    Showing <span class="fw-semibold text-dark">1</span> to <span class="fw-semibold text-dark">2</span> of
                    <span class="fw-semibold text-dark">86</span> records
                </div>
                <nav aria-label="Page navigation">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Footer -->
            <div class="mt-3 pt-2 border-top d-flex justify-content-end">
                <div class="text-muted small d-flex gap-4">
                    <span><i class="fas fa-database me-1"></i> VACCINATION_RECORDS · BOOKINGS</span>
                </div>
            </div>

        </div>
    </div>


@endsection