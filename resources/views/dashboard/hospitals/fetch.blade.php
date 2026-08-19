@extends('dashboard._mastertheme')

@section('title', 'Dashboard')

@section('body')

    <div class="container-fluid py-4 px-3 px-md-4" style="max-width: 1400px;">

        <div class="card card-custom p-3 p-md-4">

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
                    <a href="{{ route('hospitals.add') }}" class="btn btn-teal d-flex align-items-center gap-2">
                        <i class="fas fa-plus-circle"></i> Add Hospital
                    </a>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

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
                        @forelse ($hospitals as $hospital)
                            <tr>
                                <td class="text-muted font-monospace small">{{ $hospital->id }}</td>
                                <td>
                                    <img src="{{ $hospital->profile_img ? asset('storage/' . $hospital->profile_img) : 'https://ui-avatars.com/api/?name=' . urlencode($hospital->name) }}"
                                        class="rounded-circle" width="36" height="36" alt="{{ $hospital->name }}">
                                </td>
                                <td class="fw-semibold">{{ $hospital->name }}</td>
                                <td>{{ $hospital->city }}</td>
                                <td class="text-secondary small">{{ $hospital->address }}</td>
                                <td>{{ $hospital->floors }}</td>
                                <td class="text-secondary small">{{ $hospital->timings_slot }}</td>
                                <td>
                                    <span class="badge badge-{{ $hospital->status }} fw-normal">
                                        <span class="status-indicator status-{{ $hospital->status }}"></span>
                                        {{ ucfirst($hospital->status) }}
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center gap-1">
                                       
                                        <a href="{{ route('hospitals.edit', $hospital) }}" class="btn btn-sm btn-link text-teal p-1" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('hospitals.destroy', $hospital) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-link text-danger p-1" title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="9" class="text-center text-muted py-4">No hospitals found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection