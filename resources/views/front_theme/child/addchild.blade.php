@extends('front_theme._mastertheme')

@section('fornt_body')

    <div class="card container mt-5">
        <div class="card-head">
            <div>
                <span class="eyebrow"><i class="bi bi-person-plus"></i> New Record</span>
                <h2>Child Information</h2>
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

        <form method="POST" action="{{ route('parent.addChild.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-grid">
                <div class="field">
                    <label>First Name <span class="req">*</span></label>
                    <input type="text" name="first_name" placeholder="e.g. Ayesha" required value="{{ old('first_name') }}">
                </div>

                <div class="field">
                    <label>Last Name <span class="req">*</span></label>
                    <input type="text" name="last_name" placeholder="e.g. Khan" required value="{{ old('last_name') }}">
                </div>

                <div class="field">
                    <label>Date of Birth <span class="req">*</span></label>
                    <input type="date" name="dob" required value="{{ old('dob') }}">
                </div>

                <div class="field">
                    <label>Gender <span class="req">*</span></label>
                    <select name="gender" required>
                        <option value="" disabled selected>Select gender</option>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>

                <div class="field">
                    <label>Blood Group</label>
                    <select name="blood_group">
                        <option value="" selected>Unknown / not sure</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                </div>

                <div class="field">
                    <label>B-Form Number</label>
                    <input type="text" name="b_form_number" placeholder="e.g. 12345-6789012-3"
                        value="{{ old('b_form_number') }}">
                </div>

                <div class="field">
                    <label>Weight (kg)</label>
                    <input type="number" step="0.1" name="weight" placeholder="e.g. 3.2" value="{{ old('weight') }}">
                </div>


                
                <div class="field full">
                    <label>Medical Notes</label>
                    <textarea name="medical_notes" rows="3"
                        placeholder="Any medical conditions or previous vaccination history (optional)">{{ old('medical_notes') }}</textarea>
                </div>

                <div class="field full">
                    <label>Allergy Notes</label>
                    <textarea name="allergy_notes" rows="3"
                        placeholder="Any known allergies (optional)">{{ old('allergy_notes') }}</textarea>
                    <small>This helps the clinic prepare before your child's first appointment.</small>
                </div>
            </div>

            <div class="form-actions">
                <a href="{{ route('children.index') }}" class="btn btn-outline">Cancel</a>
                <button type="submit" class="btn btn-primary"><i class="bi bi-check2"></i> Save Child</button>
            </div>
        </form>
    </div>
@endsection