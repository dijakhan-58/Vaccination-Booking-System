@extends('front_theme._mastertheme')

@section('fornt_body')

    <div class="card container mt-5" id="child-{{ $child->id }}">

        <div class="card-head">

            <div>

                <span class="eyebrow">
                    <i class="bi bi-person-vcard"></i>
                    Child Information
                </span>

                <h2>
                    {{ $child->first_name }} {{ $child->last_name }}
                </h2>

                <p>
                    {{ ucfirst($child->gender) }}

                    &bull;

                    DOB:
                    {{ \Carbon\Carbon::parse($child->dob)->format('d M Y') }}
                </p>

            </div>

            <div>
                <a href="{{ route('parent.editChild', $child->id) }}" class="btn btn-ghost btn-sm">
                    <i class="bi bi-pencil"></i> Edit
                </a>
                <a href="{{ route('parent.childDetail') }}" class="btn btn-outline btn-sm">
                    <i class="bi bi-arrow-left"></i> Back
                </a>
            </div>

        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="form-grid">

            <div class="field">
                <label>First Name</label>
                <div>{{ $child->first_name }}</div>
            </div>

            <div class="field">
                <label>Last Name</label>
                <div>{{ $child->last_name }}</div>
            </div>

            <div class="field">
                <label>Date of Birth</label>
                <div>{{ \Carbon\Carbon::parse($child->dob)->format('d M Y') }}</div>
            </div>

            <div class="field">
                <label>Gender</label>
                <div>{{ ucfirst($child->gender) }}</div>
            </div>

            <div class="field">
                <label>Blood Group</label>
                <div>{{ $child->blood_group ?? 'Not provided' }}</div>
            </div>

            <div class="field">
                <label>B-Form Number</label>
                <div>{{ $child->b_form_number ?? 'Not provided' }}</div>
            </div>

            <div class="field">
                <label>Weight</label>
                <div>{{ $child->weight ? $child->weight . ' kg' : 'Not provided' }}</div>
            </div>

            <div class="field full">
                <label>Medical Notes</label>
                <div>{{ $child->medical_notes ?? 'No medical notes added.' }}</div>
            </div>

            <div class="field full">
                <label>Allergy Notes</label>
                <div>{{ $child->allergy_notes ?? 'No allergy notes added.' }}</div>
            </div>

        </div>

        <div class="form-actions">
            <form action="{{ route('parent.deleteChild', $child->id) }}" method="POST"
                onsubmit="return confirm('Are you sure you want to delete this record?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline" style="color:var(--red);border-color:var(--red);">
                    <i class="bi bi-trash"></i> Delete Record
                </button>
            </form>
        </div>

    </div>

@endsection