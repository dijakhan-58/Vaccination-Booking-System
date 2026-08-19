@extends('front_theme._mastertheme')

@section('fornt_body')

    <div class="card container mt-5">
        <div class="card-head">
            <div>
                <span class="eyebrow"><i class="bi bi-pencil"></i> Edit Record</span>
                <h2>Update Child Information</h2>
                <p>Fields marked <span style="color:var(--red);">*</span> are required.</p>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('parent.editChild.update', $child->id) }}" enctype="multipart/form-data"> @csrf
            @method('PUT')

            <div class="form-grid">
                <div class="field">
                    <label>First Name <span class="req">*</span></label>
                    <input type="text" name="first_name" required value="{{ old('first_name', $child->first_name) }}">
                </div>

                <div class="field">
                    <label>Last Name <span class="req">*</span></label>
                    <input type="text" name="last_name" required value="{{ old('last_name', $child->last_name) }}">
                </div>

                <div class="field">
                    <label>Date of Birth <span class="req">*</span></label>
                    <input type="date" name="dob" required value="{{ old('dob', $child->dob->format('Y-m-d')) }}">
                </div>

                <div class="field">
                    <label>Gender <span class="req">*</span></label>
                    <select name="gender" required>
                        <option value="male" {{ $child->gender == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ $child->gender == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>

                <div class="field">
                    <label>Blood Group</label>
                    <select name="blood_group">
                        <option value="">Unknown / not sure</option>
                        @foreach (['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'] as $bg)
                            <option value="{{ $bg }}" {{ $child->blood_group == $bg ? 'selected' : '' }}>{{ $bg }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="field">
                    <label>B-Form Number</label>
                    <input type="text" name="b_form_number" value="{{ old('b_form_number', $child->b_form_number) }}">
                </div>

                <div class="field">
                    <label>Weight (kg)</label>
                    <input type="number" step="0.1" name="weight" value="{{ old('weight', $child->weight) }}">
                </div>

                <div class="field full">
                    <label>Medical Notes</label>
                    <textarea name="medical_notes" rows="3">{{ old('medical_notes', $child->medical_notes) }}</textarea>
                </div>

                <div class="field full">
                    <label>Allergy Notes</label>
                    <textarea name="allergy_notes" rows="3">{{ old('allergy_notes', $child->allergy_notes) }}</textarea>
                </div>
            </div>

            <div class="form-actions">
                <a href="{{ route('parent.viewRecord', $child->id) }}" class="btn btn-outline">Cancel</a>
                <button type="submit" class="btn btn-primary"><i class="bi bi-check2"></i> Update Child</button>
            </div>
        </form>
    </div>
@endsection