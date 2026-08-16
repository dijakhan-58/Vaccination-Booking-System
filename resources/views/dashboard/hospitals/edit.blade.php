@extends('dashboard._mastertheme')

@section('title', 'Dashboard')

@section('body')

    <div class="container-fluid py-4 px-3 px-md-4" style="max-width: 1200px;">

        <div class="page-header d-sm-flex align-items-center justify-content-between">
            <div>
                <h1 class="h3 mb-0 text-gray-800">
                    <i class="fas fa-hospital text-teal-600 me-2"></i> Edit Hospital
                </h1>
                <p class="text-muted small mb-0">Update hospital details</p>
            </div>
            <a href="{{ route('hospitals.fetch') }}" class="btn btn-secondary-custom btn-sm mt-2 mt-sm-0">
                <i class="fas fa-arrow-left me-1"></i> Back to List
            </a>
        </div>

        <div class="card card-custom shadow-sm">
            <div class="card-header-custom">
                <h6 class="m-0 font-weight-bold">
                    <i class="fas fa-building me-2"></i> Hospital Information
                </h6>
            </div>
            <div class="card-body p-4">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0 ps-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('hospitals.update', $hospital) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row g-4">

                        <div class="col-md-6">
                            <label for="name" class="form-label">
                                <i class="fas fa-hospital me-1"></i> Hospital Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name', $hospital->name) }}" required />
                        </div>

                        <div class="col-md-6">
                            <label for="city" class="form-label">
                                <i class="fas fa-city me-1"></i> City <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="city" name="city"
                                value="{{ old('city', $hospital->city) }}" required />
                        </div>

                        <div class="col-12">
                            <label for="address" class="form-label">
                                <i class="fas fa-map-marker-alt me-1"></i> Address <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="address" name="address"
                                value="{{ old('address', $hospital->address) }}" required />
                        </div>

                        <div class="col-md-4">
                            <label for="floors" class="form-label">
                                <i class="fas fa-layer-group me-1"></i> Floors <span class="text-danger">*</span>
                            </label>
                            <input type="number" class="form-control" id="floors" name="floors"
                                value="{{ old('floors', $hospital->floors) }}" min="1" required />
                        </div>

                        <div class="col-md-4">
                            <label for="timings_slot" class="form-label">
                                <i class="fas fa-clock me-1"></i> Timings Slot <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="timings_slot" name="timings_slot"
                                value="{{ old('timings_slot', $hospital->timings_slot) }}" required />
                        </div>

                        <div class="col-md-4">
                            <label for="status" class="form-label">
                                <i class="fas fa-circle me-1"></i> Status <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="active" {{ old('status', $hospital->status) == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ old('status', $hospital->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                <option value="pending" {{ old('status', $hospital->status) == 'pending' ? 'selected' : '' }}>Pending</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="profile_img" class="form-label">
                                <i class="fas fa-image me-1"></i> Profile Image <span class="text-muted">(Optional)</span>
                            </label>
                            @if ($hospital->profile_img)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $hospital->profile_img) }}" width="60" height="60" class="rounded-circle" alt="{{ $hospital->name }}">
                                </div>
                            @endif
                            <input type="file" class="form-control" id="profile_img" name="profile_img" accept="image/*" />
                            <small class="text-muted">Leave empty to keep the current image (Max: 2MB)</small>
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <hr />
                            <button type="submit" class="btn btn-primary-custom mt-4">
                                <i class="fas fa-save me-1"></i> Update Hospital
                            </button>
                            <a href="{{ route('hospitals.fetch') }}" class="btn btn-secondary-custom mt-4">
                                <i class="fas fa-times me-1"></i> Cancel
                            </a>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </div>

@endsection