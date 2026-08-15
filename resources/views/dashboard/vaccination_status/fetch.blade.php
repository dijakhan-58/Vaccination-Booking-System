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
                        <i class="fas fa-boxes-stacked text-teal-600 fs-5"></i>
                    </div>
                    <div>
                        <h1 class="h3 fw-bold text-slate-800 mb-0">Vaccine Status</h1>
                        <p class="text-muted small mb-0">Track and update vaccine availability</p>
                    </div>
                </div>
            </div>

            <!-- Summary Cards -->
            <div class="row g-3 mb-4">
                <div class="col-md-4 col-sm-6">
                    <div class="p-3 rounded-3 border bg-light d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted small mb-1">Available</p>
                            <h4 class="fw-bold mb-0 text-success">7</h4>
                        </div>
                        <i class="fas fa-check-circle text-success fs-3"></i>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="p-3 rounded-3 border bg-light d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted small mb-1">Limited</p>
                            <h4 class="fw-bold mb-0 text-warning">3</h4>
                        </div>
                        <i class="fas fa-exclamation-triangle text-warning fs-3"></i>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="p-3 rounded-3 border bg-light d-flex align-items-center justify-content-between">
                        <div>
                            <p class="text-muted small mb-1">Out of Stock</p>
                            <h4 class="fw-bold mb-0 text-danger">2</h4>
                        </div>
                        <i class="fas fa-times-circle text-danger fs-3"></i>
                    </div>
                </div>
            </div>

            <!-- Filters -->
            <div class="filter-section row g-2 mb-3">
                <div class="col-md-5 col-sm-12">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="fas fa-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0 ps-0" placeholder="Search by Vaccine Name" />
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <select class="form-select">
                        <option value="">All Status</option>
                        <option value="available">Available</option>
                        <option value="limited">Limited</option>
                        <option value="out_of_stock">Out of Stock</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-6">
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
                            <th style="min-width: 130px;">Vaccine Name</th>
                            <th style="min-width: 100px;">Manufacturer</th>
                            <th style="width: 90px;">Dose Count</th>
                            <th style="width: 140px;">Current Status</th>
                            <th style="min-width: 200px;" class="text-center">Change Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <td class="text-muted font-monospace small">1</td>
                            <td class="fw-semibold">DTaP</td>
                            <td>Sanofi</td>
                            <td><span class="badge bg-light text-dark fw-normal">3</span></td>
                            <td><span class="badge badge-available fw-normal"><span
                                        class="status-indicator status-available"></span>Available</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-outline-success" title="Mark Available">Available</button>
                                    <button class="btn btn-sm btn-outline-warning" title="Mark Limited">Limited</button>
                                    <button class="btn btn-sm btn-outline-danger" title="Mark Out of Stock">Out</button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr>
                            <td class="text-muted font-monospace small">2</td>
                            <td class="fw-semibold">IPV</td>
                            <td>Pfizer</td>
                            <td><span class="badge bg-light text-dark fw-normal">4</span></td>
                            <td><span class="badge badge-limited fw-normal"><span
                                        class="status-indicator status-limited"></span>Limited</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-outline-success" title="Mark Available">Available</button>
                                    <button class="btn btn-sm btn-outline-warning" title="Mark Limited">Limited</button>
                                    <button class="btn btn-sm btn-outline-danger" title="Mark Out of Stock">Out</button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr>
                            <td class="text-muted font-monospace small">3</td>
                            <td class="fw-semibold">HepB</td>
                            <td>GSK</td>
                            <td><span class="badge bg-light text-dark fw-normal">3</span></td>
                            <td><span class="badge badge-outofstock fw-normal"><span
                                        class="status-indicator status-outofstock"></span>Out of Stock</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-outline-success" title="Mark Available">Available</button>
                                    <button class="btn btn-sm btn-outline-warning" title="Mark Limited">Limited</button>
                                    <button class="btn btn-sm btn-outline-danger" title="Mark Out of Stock">Out</button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>


@endsection