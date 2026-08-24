@extends('dashboard._mastertheme')

@section('title', 'Dashboard')

@section('body')


    <div class="container-fluid py-4 px-3 px-md-4" style="max-width: 1400px;">

        <div class="card card-custom p-3 p-md-4">


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
                    <a href="{{ route('vaccines.add') }}" class="btn btn-teal d-flex align-items-center gap-2">

                        <i class="fas fa-plus-circle"></i>
                        Add Vaccine

                    </a>

                </div>
            </div>

             
            <form action="{{ route('vaccines.index') }}" method="GET" class="filter-section row g-2 mb-3">
                <div class="col-md-4 col-sm-6">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="fas fa-search text-muted"></i></span>
                        <input type="text" name="search" value="{{ request('search') }}"
                            class="form-control border-start-0 ps-0"
                            placeholder="Search by Vaccine Name or Disease" />
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <select name="manufacturer" class="form-select">
                        <option value="">All Manufacturers</option>
                        @foreach ($manufacturers as $manufacturer)
                            <option value="{{ $manufacturer }}" {{ request('manufacturer') == $manufacturer ? 'selected' : '' }}>
                                {{ $manufacturer }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3 col-sm-6">
                    <select name="availability_status" class="form-select">
                        <option value="">All Availability</option>
                        <option value="available" {{ request('availability_status') == 'available' ? 'selected' : '' }}>Available</option>
                        <option value="limited" {{ request('availability_status') == 'limited' ? 'selected' : '' }}>Limited</option>
                        <option value="out_of_stock" {{ request('availability_status') == 'out_of_stock' ? 'selected' : '' }}>Out of Stock</option>
                    </select>
                </div>
                <div class="col-md-2 col-sm-6">
                    <button type="submit" class="btn btn-teal w-100 d-flex align-items-center justify-content-center gap-1">
                        <i class="fas fa-sliders-h"></i> Apply
                    </button>
                </div>
            </form>

            @if (request('search') || request('manufacturer') || request('availability_status'))
                <div class="mb-3">
                    <a href="{{ route('vaccines.index') }}" class="text-decoration-none small">
                        <i class="fas fa-times-circle"></i> Clear filters
                    </a>
                </div>
            @endif



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
                        @php
                            $index = 1;
                        @endphp
                        @forelse($vaccines as $vaccine)

                            <tr>
                                <td>{{ $index++ }}</td>
                               
                                <td class="fw-semibold">
                                    {{ $vaccine->name }}
                                </td>

                                <td>
                                    {{ $vaccine->disease }}
                                </td>

                                <td class="text-secondary small">
                                    {{ $vaccine->description ?? 'N/A' }}
                                </td>

                                <td>
                                    <span class="badge bg-light text-dark fw-normal">
                                        {{ $vaccine->dose_count }}
                                    </span>
                                </td>

                                <td>
                                    {{ $vaccine->manufacturer }}
                                </td>

                                <td>
                                    {{ $vaccine->recommended_age_days }}
                                </td>

                                <td>
                                    @if($vaccine->availability_status === 'available')

                                        <span class="badge badge-available fw-normal">
                                            Available
                                        </span>

                                    @elseif($vaccine->availability_status === 'limited')

                                        <span class="badge badge-limited fw-normal">
                                            Limited
                                        </span>

                                    @elseif($vaccine->availability_status === 'out_of_stock')

                                        <span class="badge badge-outofstock fw-normal">
                                            Out of Stock
                                        </span>

                                    @else

                                        <span class="badge bg-secondary fw-normal">
                                            Unknown
                                        </span>

                                    @endif
                                </td>

                                <td>
                                    <div class="d-flex justify-content-center gap-1">

                                        {{-- Edit --}}
                                        <a href="{{ route('vaccines.edit', $vaccine->id) }}"
                                            class="btn btn-sm btn-link text-teal p-1" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>


                                        {{-- Delete --}}
                                        <form action="{{ route('vaccines.destroy', $vaccine->id) }}" method="POST"
                                            class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-link text-danger p-1" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this vaccine?')">

                                                <i class="fas fa-trash-alt"></i>

                                            </button>

                                        </form>

                                    </div>
                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="9" class="text-center py-4 text-muted">
                                    No vaccines found.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>
                </table>
            </div>



        </div>
    </div>

    <script>
      
        function toggleDescription(id) {
            const row = document.getElementById(id);
            if (row) {
                row.classList.toggle('show');
            }
        }
    </script>


@endsection