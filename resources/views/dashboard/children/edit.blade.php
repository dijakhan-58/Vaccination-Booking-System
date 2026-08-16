@extends('dashboard._mastertheme')

@section('title', 'Edit Child')

@section('body')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                <i class="bi bi-person-lines-fill"></i> Edit Child
            </h1>
            <a href="{{ route('children.index') }}" class="btn btn-secondary btn-sm">
                <i class="bi bi-arrow-left"></i> Back to List
            </a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-teal-600">Child Information</h6>
            </div>
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0 ps-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('children.update', $child) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <!-- Parent -->
                        <div class="col-md-6 mb-3">
                            <label for="parent_id" class="form-label fw-bold">
                                <i class="bi bi-person-badge"></i> Parent <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" id="parent_id" name="parent_id" required>
                                <option value="">Select Parent</option>
                                @foreach ($parents as $parent)
                                    <option value="{{ $parent->id }}" {{ old('parent_id', $child->parent_id) == $parent->id ? 'selected' : '' }}>
                                        {{ $parent->name }} ({{ $parent->email }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- First Name -->
                        <div class="col-md-3 mb-3">
                            <label for="first_name" class="form-label fw-bold">
                                <i class="bi bi-person"></i> First Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="first_name" name="first_name"
                                value="{{ old('first_name', $child->first_name) }}" required>
                        </div>

                        <!-- Last Name -->
                        <div class="col-md-3 mb-3">
                            <label for="last_name" class="form-label fw-bold">
                                <i class="bi bi-person"></i> Last Name <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="last_name" name="last_name"
                                value="{{ old('last_name', $child->last_name) }}" required>
                        </div>

                        <!-- DOB -->
                        <div class="col-md-6 mb-3">
                            <label for="dob" class="form-label fw-bold">
                                <i class="bi bi-calendar3"></i> Date of Birth <span class="text-danger">*</span>
                            </label>
                            <input type="date" class="form-control" id="dob" name="dob"
                                value="{{ old('dob', $child->dob->format('Y-m-d')) }}" required>
                        </div>

                        <!-- Gender -->
                        <div class="col-md-6 mb-3">
                            <label for="gender" class="form-label fw-bold">
                                <i class="bi bi-gender-ambiguous"></i> Gender <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" id="gender" name="gender" required>
                                <option value="">Select Gender</option>
                                <option value="male" {{ old('gender', $child->gender) == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ old('gender', $child->gender) == 'female' ? 'selected' : '' }}>Female</option>
                                <option value="other" {{ old('gender', $child->gender) == 'other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>

                        <!-- Blood Group -->
                        <div class="col-md-6 mb-3">
                            <label for="blood_group" class="form-label fw-bold">
                                <i class="bi bi-droplet"></i> Blood Group
                            </label>
                            <select class="form-select" id="blood_group" name="blood_group">
                                <option value="">Select Blood Group</option>
                                @foreach (['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'] as $bg)
                                    <option value="{{ $bg }}" {{ old('blood_group', $child->blood_group) == $bg ? 'selected' : '' }}>{{ $bg }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- B-Form Number -->
                        <div class="col-md-6 mb-3">
                            <label for="b_form_number" class="form-label fw-bold">
                                <i class="bi bi-card-text"></i> B-Form Number
                            </label>
                            <input type="text" class="form-control" id="b_form_number" name="b_form_number"
                                value="{{ old('b_form_number', $child->b_form_number) }}">
                        </div>

                        <!-- Weight -->
                        <div class="col-md-6 mb-3">
                            <label for="weight" class="form-label fw-bold">
                                <i class="bi bi-weight-scale"></i> Weight (kg)
                            </label>
                            <input type="number" step="0.01" class="form-control" id="weight" name="weight"
                                value="{{ old('weight', $child->weight) }}">
                        </div>

                        <!-- Allergy Notes -->
                        <div class="col-12 mb-3">
                            <label for="allergy_notes" class="form-label fw-bold">
                                <i class="bi bi-exclamation-triangle"></i> Allergy Notes
                            </label>
                            <textarea class="form-control" id="allergy_notes" name="allergy_notes"
                                rows="2">{{ old('allergy_notes', $child->allergy_notes) }}</textarea>
                        </div>

                        <!-- Medical Notes -->
                        <div class="col-12 mb-3">
                            <label for="medical_notes" class="form-label fw-bold">
                                <i class="bi bi-file-medical"></i> Medical Notes
                            </label>
                            <textarea class="form-control" id="medical_notes" name="medical_notes"
                                rows="3">{{ old('medical_notes', $child->medical_notes) }}</textarea>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <hr>
                            <button type="submit" class="btn btn-primary mt-4">
                                <i class="bi bi-save"></i> Update Child
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