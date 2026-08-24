@extends('dashboard._mastertheme')

@section('title', 'Children')

@section('body')

    <div id="root" class="container-fluid px-3 px-md-4">
        <div class="card shadow-sm border-0 rounded-4 p-3 p-md-4">

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
                    <a href="{{ route('children.add') }}" class="btn btn-teal d-flex align-items-center gap-2">
                        <i class="fas fa-plus-circle"></i> Add New Child
                    </a>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="table-responsive rounded-3 border">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="text-center" style="width: 50px;">ID</th>
                     
                            <th style="width: 150px;">Name</th>
                            <th style="width: 160px;">Parent</th>
                            <th style="width: 100px;">DOB</th>
                            <th style="width: 90px;">Gender</th>
                            <th style="width: 100px;">Blood Group</th>
                            <th style="width: 130px;">B-Form Number</th>
                            <th style="width: 90px;">Weight (kg)</th>
                            <th class="text-center" style="width: 160px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $index = 1;
                        @endphp
                        @forelse ($children as $child)
                            <tr>
                                <td class="text-center text-muted font-monospace small">{{ $index++}}</td>
                                
                                <td class="fw-semibold">{{ $child->first_name }} {{ $child->last_name }}</td>
                                <td class="text-secondary">{{ $child->parent->name ?? '—' }}</td>
                                <td class="text-secondary small text-nowrap">{{ $child->dob->format('Y-m-d') }}</td>
                                <td class="text-secondary">{{ ucfirst($child->gender) }}</td>
                                <td class="text-secondary">{{ $child->blood_group ?? '—' }}</td>
                                <td class="text-secondary font-monospace small">{{ $child->b_form_number ?? '—' }}</td>
                                <td class="text-secondary">{{ $child->weight ?? '—' }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-1">
                                        <a href="{{ route('children.edit', $child) }}" class="btn btn-sm btn-link text-warning p-1" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('children.destroy', $child) }}" method="POST" class="d-inline">
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
                                <td colspan="10" class="text-center text-muted py-4">No children found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection