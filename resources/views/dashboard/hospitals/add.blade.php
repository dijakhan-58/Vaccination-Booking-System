@extends('dashboard._mastertheme')

@section('title', 'Dashboard')

@section('body')


    <div class="container-fluid py-4 px-3 px-md-4" style="max-width: 1200px;">

        <!-- Page Header -->
        <div class="page-header d-sm-flex align-items-center justify-content-between">
            <div>
                <h1 class="h3 mb-0 text-gray-800">
                    <i class="fas fa-hospital text-teal-600 me-2"></i> Add Hospital
                </h1>
                <p class="text-muted small mb-0">Register a new hospital in the system</p>
            </div>
            <a href="{{ route('hospitals.fetch') }}" class="btn btn-secondary-custom btn-sm mt-2 mt-sm-0">
                <i class="fas fa-arrow-left me-1"></i> Back to List
            </a>
        </div>

        <!-- Form Card -->
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

                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row g-4">

                        <!-- Name -->
                        <div class="col-md-6">
                            <label for="name" class="form-label">
                                <i class="fas fa-hospital me-1"></i> Hospital Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name') }}" placeholder="Enter hospital name" required />
                        </div>

                        <!-- City -->
                        <div class="col-md-6">
                            <label for="city" class="form-label">
                                <i class="fas fa-city me-1"></i> City <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="city" name="city"
                                value="{{ old('city') }}" placeholder="Enter city name" required />
                        </div>

                        <!-- Address -->
                        <div class="col-12">
                            <label for="address" class="form-label">
                                <i class="fas fa-map-marker-alt me-1"></i> Address <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="address" name="address"
                                value="{{ old('address') }}" placeholder="Enter street address" required />
                        </div>

                        <!-- Floors -->
                        <div class="col-md-4">
                            <label for="floors" class="form-label">
                                <i class="fas fa-layer-group me-1"></i> Floors <span class="text-danger">*</span>
                            </label>
                            <input type="number" class="form-control" id="floors" name="floors"
                                value="{{ old('floors') }}" placeholder="e.g. 4" min="1" required />
                        </div>

                        <!-- Timings Slot -->
                        <div class="col-md-4">
                            <label for="timings_slot" class="form-label">
                                <i class="fas fa-clock me-1"></i> Timings Slot <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="timings_slot" name="timings_slot"
                                value="{{ old('timings_slot') }}" placeholder="e.g. 9:00 AM - 9:00 PM" required />
                        </div>

                        <!-- Status -->
                        <div class="col-md-4">
                            <label for="status" class="form-label">
                                <i class="fas fa-circle me-1"></i> Status <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" id="status" name="status" required>
                                <option value="active" {{ old('status', 'active') == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                            </select>
                        </div>

                        <!-- Profile Image -->
                        <div class="col-12">
                            <label for="profile_img" class="form-label">
                                <i class="fas fa-image me-1"></i> Profile Image <span class="text-muted">(Optional)</span>
                            </label>
                            <input type="file" class="form-control" id="profile_img" name="profile_img"
                                accept="image/*" onchange="previewImage(event)" />
                            <small class="text-muted">Upload a hospital image (Max: 2MB)</small>
                            <div class="mt-3">
                                <img id="imagePreview" class="image-preview" alt="Hospital Image Preview" />
                            </div>
                        </div>

                    </div>

                    <!-- Form Actions -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <hr />
                            <button type="submit" class="btn btn-primary-custom mt-4">
                                <i class="fas fa-save me-1"></i> Save Hospital
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

    <script>
        function previewImage(event) {
            const preview = document.getElementById('imagePreview');
            const file = event.target.files[0];
            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            }
        }
    </script>

@endsection