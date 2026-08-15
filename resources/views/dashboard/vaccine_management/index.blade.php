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
                        <i class="fas fa-syringe text-teal-600 fs-5"></i>
                    </div>
                    <div>
                        <h1 class="h3 fw-bold text-slate-800 mb-0">Vaccine List</h1>
                        <p class="text-muted small mb-0">Manage all vaccines in the system</p>
                    </div>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <button class="btn btn-teal d-flex align-items-center gap-2" data-bs-toggle="modal"
                        data-bs-target="#vaccineModal">
                        <i class="fas fa-plus-circle"></i> Add Vaccine
                    </button>

                </div>
            </div>

            <!-- Filters -->
            <div class="filter-section row g-2 mb-3">
                <div class="col-md-4 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="fas fa-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0 ps-0"
                            placeholder="Search by Vaccine Name or Disease" />
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <select class="form-select">
                        <option value="">All Manufacturers</option>
                        <option value="Sanofi">Sanofi</option>
                        <option value="Pfizer">Pfizer</option>
                        <option value="GSK">GSK</option>
                        <option value="Merck">Merck</option>
                    </select>
                </div>
                <div class="col-md-3 col-sm-6">
                    <select class="form-select">
                        <option value="">All Availability</option>
                        <option value="available">Available</option>
                        <option value="limited">Limited</option>
                        <option value="out_of_stock">Out of Stock</option>
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
                            <th style="width: 60px;">ID</th>
                            <th style="min-width: 120px;">Vaccine Name</th>
                            <th style="min-width: 120px;">Disease</th>
                            <th style="min-width: 160px;">Description</th>
                            <th style="width: 90px;">Dose Count</th>
                            <th style="min-width: 100px;">Manufacturer</th>
                            <th style="width: 120px;">Rec. Age (days)</th>
                            <th style="width: 110px;">Availability</th>
                            <th style="width: 140px;" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr class="description-toggle" onclick="toggleDescription('desc1')">
                            <td class="text-muted font-monospace small">1</td>
                            <td class="fw-semibold">DTaP</td>
                            <td>Diphtheria, Tetanus, Pertussis</td>
                            <td class="text-secondary small">Protects against diphtheria, tetanus and whooping cough</td>
                            <td><span class="badge bg-light text-dark fw-normal">3</span></td>
                            <td>Sanofi</td>
                            <td>42</td>
                            <td><span class="badge badge-available fw-normal">available</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-link text-teal p-1" title="Edit" data-bs-toggle="modal"
                                        data-bs-target="#vaccineModal"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-link text-danger p-1" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>


                        <!-- Row 2 -->
                        <tr class="description-toggle" onclick="toggleDescription('desc2')">
                            <td class="text-muted font-monospace small">2</td>
                            <td class="fw-semibold">IPV</td>
                            <td>Poliomyelitis</td>
                            <td class="text-secondary small">Inactivated poliovirus vaccine</td>
                            <td><span class="badge bg-light text-dark fw-normal">4</span></td>
                            <td>Pfizer</td>
                            <td>60</td>
                            <td><span class="badge badge-limited fw-normal">limited</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-link text-teal p-1" title="Edit" data-bs-toggle="modal"
                                        data-bs-target="#vaccineModal"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-link text-danger p-1" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>


                        <!-- Row 3 -->
                        <tr class="description-toggle" onclick="toggleDescription('desc3')">
                            <td class="text-muted font-monospace small">3</td>
                            <td class="fw-semibold">MMR</td>
                            <td>Measles, Mumps, Rubella</td>
                            <td class="text-secondary small">Combined vaccine for measles, mumps and rubella</td>
                            <td><span class="badge bg-light text-dark fw-normal">2</span></td>
                            <td>Merck</td>
                            <td>365</td>
                            <td><span class="badge badge-available fw-normal">available</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-link text-teal p-1" title="Edit" data-bs-toggle="modal"
                                        data-bs-target="#vaccineModal"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-link text-danger p-1" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>


                        <!-- Row 4 -->
                        <tr class="description-toggle" onclick="toggleDescription('desc4')">
                            <td class="text-muted font-monospace small">4</td>
                            <td class="fw-semibold">HepB</td>
                            <td>Hepatitis B</td>
                            <td class="text-secondary small">Protects against hepatitis B infection</td>
                            <td><span class="badge bg-light text-dark fw-normal">3</span></td>
                            <td>GSK</td>
                            <td>0</td>
                            <td><span class="badge badge-outofstock fw-normal">out_of_stock</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-link text-teal p-1" title="Edit" data-bs-toggle="modal"
                                        data-bs-target="#vaccineModal"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-link text-danger p-1" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>


                        <!-- Row 5 -->
                        <tr class="description-toggle" onclick="toggleDescription('desc5')">
                            <td class="text-muted font-monospace small">5</td>
                            <td class="fw-semibold">Varicella</td>
                            <td>Chickenpox</td>
                            <td class="text-secondary small">Protects against chickenpox</td>
                            <td><span class="badge bg-light text-dark fw-normal">2</span></td>
                            <td>Sanofi</td>
                            <td>365</td>
                            <td><span class="badge badge-available fw-normal">available</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-link text-teal p-1" title="Edit" data-bs-toggle="modal"
                                        data-bs-target="#vaccineModal"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-sm btn-link text-danger p-1" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                </div>
                            </td>
                        </tr>


                        <!-- Row 6 -->
                        <tr class="description-toggle" onclick="toggleDescription('desc6')">
                            <td class="text-muted font-monospace small">6</td>
                            <td class="fw-semibold">PCV13</td>
                            <td>Pneumococcal Disease</td>
                            <td class="text-secondary small">Protects against pneumococcal infections</td>
                            <td><span class="badge bg-light text-dark fw-normal">4</span></td>
                            <td>Pfizer</td>
                            <td>60</td>
                            <td><span class="badge badge-limited fw-normal">limited</span></td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <button class="btn btn-sm btn-link text-teal p-1" title="Edit" data-bs-toggle="modal"
                                        data-bs-target="#vaccineModal"><i class="fas fa-edit"></i></button>
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
                    Showing <span class="fw-semibold text-dark">1</span> to <span class="fw-semibold text-dark">6</span>
                    of <span class="fw-semibold text-dark">12</span> vaccines
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
                    <span><i class="fas fa-database me-1"></i> VACCINES · STOCK</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Add / Edit Vaccine -->
    {{-- <div class="modal fade" id="vaccineModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold"><i class="fas fa-syringe text-teal-600 me-2"></i> Add New Vaccine
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold small">Vaccine Name</label>
                                <input type="text" class="form-control" placeholder="e.g. DTaP" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold small">Disease</label>
                                <input type="text" class="form-control" placeholder="Diphtheria, Tetanus, Pertussis" />
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold small">Description</label>
                                <textarea class="form-control" rows="2" placeholder="Vaccine description..."></textarea>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-semibold small">Dose Count</label>
                                <input type="number" class="form-control" value="3" min="1" />
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-semibold small">Manufacturer</label>
                                <input type="text" class="form-control" placeholder="Sanofi" />
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-semibold small">Recommended Age (days)</label>
                                <input type="number" class="form-control" value="42" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold small">Availability Status</label>
                                <select class="form-select">
                                    <option>available</option>
                                    <option>limited</option>
                                    <option>out_of_stock</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-teal">Save Vaccine</button>
                </div>
            </div>
        </div>
    </div> --}}
    <script>
        // Toggle description row
        function toggleDescription(id) {
            const row = document.getElementById(id);
            if (row) {
                row.classList.toggle('show');
            }
        }
    </script>


@endsection