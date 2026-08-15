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
                <h6 class="m-0 font-weight-bold text-teal-600">Child Information</h6>
            </div>
            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        {{-- Parent ID --}}
                        <div class="col-md-6 mb-3">
                            <label for="parent_id" class="form-label fw-bold">
                                <i class="bi bi-person-badge"></i> Parent ID <span class="text-danger">*</span>
                            </label>
                            <input type="number" class="form-control @error('parent_id') is-invalid @enderror"
                                id="parent_id" name="parent_id" value="{{ old('parent_id') }}"
                                placeholder="Enter parent user ID" required>
                            @error('parent_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- First Name --}}
                        <div class="col-md-3 mb-3">
                            <label for="first_name" class="form-label fw-bold">
                                <i class="bi bi-person"></i> First Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name"
                                name="first_name" value="{{ old('first_name') }}" placeholder="First name" required>
                            @error('first_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Last Name --}}
                        <div class="col-md-3 mb-3">
                            <label for="last_name" class="form-label fw-bold">
                                <i class="bi bi-person"></i> Last Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name"
                                name="last_name" value="{{ old('last_name') }}" placeholder="Last name" required>
                            @error('last_name')
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

                        {{-- B-Form Number --}}
                        <div class="col-md-6 mb-3">
                            <label for="b_form_number" class="form-label fw-bold">
                                <i class="bi bi-card-text"></i> B-Form Number
                            </label>
                            <input type="text" class="form-control @error('b_form_number') is-invalid @enderror"
                                id="b_form_number" name="b_form_number" value="{{ old('b_form_number') }}"
                                placeholder="Enter B-Form number">
                            @error('b_form_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Weight --}}
                        <div class="col-md-6 mb-3">
                            <label for="weight" class="form-label fw-bold">
                                <i class="bi bi-weight-scale"></i> Weight (kg)
                            </label>
                            <input type="number" step="0.01" class="form-control @error('weight') is-invalid @enderror"
                                id="weight" name="weight" value="{{ old('weight') }}" placeholder="e.g., 12.50">
                            @error('weight')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Allergy Notes --}}
                        <div class="col-12 mb-3">
                            <label for="allergy_notes" class="form-label fw-bold">
                                <i class="bi bi-exclamation-triangle"></i> Allergy Notes
                            </label>
                            <textarea class="form-control @error('allergy_notes') is-invalid @enderror"
                                id="allergy_notes" name="allergy_notes" rows="2"
                                placeholder="Any allergies?">{{ old('allergy_notes') }}</textarea>
                            @error('allergy_notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Medical Notes --}}
                        <div class="col-12 mb-3">
                            <label for="medical_notes" class="form-label fw-bold">
                                <i class="bi bi-file-medical"></i> Medical Notes
                            </label>
                            <textarea class="form-control @error('medical_notes') is-invalid @enderror"
                                id="medical_notes" name="medical_notes" rows="3"
                                placeholder="Any medical history or special notes...">{{ old('medical_notes') }}</textarea>
                            @error('medical_notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    {{-- Form Actions --}}
                    <div class="row mt-4">
                        <div class="col-12">
                            <hr>
                            <button type="submit" class="btn btn-primary mt-4">
                                <i class="bi bi-save"></i> Save Child
                            </button>
                            <a href="{{ route('children.index') }}" class="btn btn-secondary mt-4">
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
                console.log('Age: ' + age + ' years');
            }
        });
    </script>
@endpush