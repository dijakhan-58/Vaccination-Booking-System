{{-- resources/views/children/create.blade.php --}}
@extends('dashboard._mastertheme')

@section('title', 'Add Child')

@section('body')
    <div class="container-fluid">
        {{-- Page Header --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                <i class="bi bi-person-plus"></i> Add Child
            </h1>
            <a href="{{ route('children.index') }}" class="btn btn-secondary btn-sm">
                <i class="bi bi-arrow-left"></i> Back to List
            </a>
        </div>

        {{-- Form Card --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Child Information</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('children.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        {{-- Child Name --}}
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label fw-bold">
                                <i class="bi bi-person"></i> Child Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name') }}" placeholder="Enter child's full name" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Date of Birth --}}
                        <div class="col-md-6 mb-3">
                            <label for="dob" class="form-label fw-bold">
                                <i class="bi bi-calendar3"></i> Date of Birth <span class="text-danger">*</span>
                            </label>
                            <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob"
                                value="{{ old('dob') }}" required>
                            @error('dob')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Gender --}}
                        <div class="col-md-6 mb-3">
                            <label for="gender" class="form-label fw-bold">
                                <i class="bi bi-gender-ambiguous"></i> Gender <span class="text-danger">*</span>
                            </label>
                            <select class="form-select @error('gender') is-invalid @enderror" id="gender" name="gender"
                                required>
                                <option value="">Select Gender</option>
                                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                            @error('gender')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Blood Group --}}
                        <div class="col-md-6 mb-3">
                            <label for="blood_group" class="form-label fw-bold">
                                <i class="bi bi-droplet"></i> Blood Group
                            </label>
                            <select class="form-select @error('blood_group') is-invalid @enderror" id="blood_group"
                                name="blood_group">
                                <option value="">Select Blood Group</option>
                                <option value="A+" {{ old('blood_group') == 'A+' ? 'selected' : '' }}>A+</option>
                                <option value="A-" {{ old('blood_group') == 'A-' ? 'selected' : '' }}>A-</option>
                                <option value="B+" {{ old('blood_group') == 'B+' ? 'selected' : '' }}>B+</option>
                                <option value="B-" {{ old('blood_group') == 'B-' ? 'selected' : '' }}>B-</option>
                                <option value="AB+" {{ old('blood_group') == 'AB+' ? 'selected' : '' }}>AB+</option>
                                <option value="AB-" {{ old('blood_group') == 'AB-' ? 'selected' : '' }}>AB-</option>
                                <option value="O+" {{ old('blood_group') == 'O+' ? 'selected' : '' }}>O+</option>
                                <option value="O-" {{ old('blood_group') == 'O-' ? 'selected' : '' }}>O-</option>
                            </select>
                            @error('blood_group')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Parent Name --}}
                        <div class="col-md-6 mb-3">
                            <label for="parent_name" class="form-label fw-bold">
                                <i class="bi bi-person-badge"></i> Parent/Guardian Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control @error('parent_name') is-invalid @enderror"
                                id="parent_name" name="parent_name" value="{{ old('parent_name') }}"
                                placeholder="Enter parent/guardian name" required>
                            @error('parent_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Parent Contact --}}
                        <div class="col-md-6 mb-3">
                            <label for="parent_contact" class="form-label fw-bold">
                                <i class="bi bi-phone"></i> Contact Number <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control @error('parent_contact') is-invalid @enderror"
                                id="parent_contact" name="parent_contact" value="{{ old('parent_contact') }}"
                                placeholder="Enter contact number" required>
                            @error('parent_contact')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label fw-bold">
                                <i class="bi bi-envelope"></i> Email Address
                            </label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" value="{{ old('email') }}" placeholder="Enter email address">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Address --}}
                        <div class="col-md-6 mb-3">
                            <label for="address" class="form-label fw-bold">
                                <i class="bi bi-geo-alt"></i> Address
                            </label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                                name="address" value="{{ old('address') }}" placeholder="Enter address">
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Weight --}}
                        <div class="col-md-4 mb-3">
                            <label for="weight" class="form-label fw-bold">
                                <i class="bi bi-weight-scale"></i> Weight (kg)
                            </label>
                            <input type="number" step="0.1" class="form-control @error('weight') is-invalid @enderror"
                                id="weight" name="weight" value="{{ old('weight') }}" placeholder="e.g., 12.5">
                            @error('weight')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Height --}}
                        <div class="col-md-4 mb-3">
                            <label for="height" class="form-label fw-bold">
                                <i class="bi bi-rulers"></i> Height (cm)
                            </label>
                            <input type="number" step="0.1" class="form-control @error('height') is-invalid @enderror"
                                id="height" name="height" value="{{ old('height') }}" placeholder="e.g., 85.5">
                            @error('height')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Allergies --}}
                        <div class="col-md-4 mb-3">
                            <label for="allergies" class="form-label fw-bold">
                                <i class="bi bi-exclamation-triangle"></i> Allergies
                            </label>
                            <input type="text" class="form-control @error('allergies') is-invalid @enderror" id="allergies"
                                name="allergies" value="{{ old('allergies') }}" placeholder="Any allergies?">
                            @error('allergies')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Medical History --}}
                        <div class="col-12 mb-3">
                            <label for="medical_history" class="form-label fw-bold">
                                <i class="bi bi-file-medical"></i> Medical History
                            </label>
                            <textarea class="form-control @error('medical_history') is-invalid @enderror"
                                id="medical_history" name="medical_history" rows="3"
                                placeholder="Any medical history or special notes...">{{ old('medical_history') }}</textarea>
                            @error('medical_history')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Profile Image --}}
                        <div class="col-md-6 mb-3">
                            <label for="profile_image" class="form-label fw-bold">
                                <i class="bi bi-image"></i> Profile Image
                            </label>
                            <input type="file" class="form-control @error('profile_image') is-invalid @enderror"
                                id="profile_image" name="profile_image" accept="image/*">
                            <small class="text-muted">Upload a profile picture (Max: 2MB)</small>
                            @error('profile_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Form Actions --}}
                    <div class="row mt-4">
                        <div class="col-12">
                            <hr>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i> Save Child
                            </button>
                            <a href="{{ route('children.index') }}" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancel
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Auto-calculate age from DOB (optional)
        document.getElementById('dob').addEventListener('change', function () {
            const dob = new Date(this.value);
            const today = new Date();
            let age = today.getFullYear() - dob.getFullYear();
            const m = today.getMonth() - dob.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
                age--;
            }
            if (age > 0) {
                // You can show age if you have a field for it
                console.log('Age: ' + age + ' years');
            }
        });
    </script>
@endpush