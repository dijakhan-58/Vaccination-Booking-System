@extends('dashboard._mastertheme')

@section('title', 'Add Vaccination Record')

@section('body')

    <div class="container-fluid py-4 px-3 px-md-4" style="max-width: 1400px;">

        <!-- Main Card -->
        <div class="card card-custom p-3 p-md-4">

            <!-- Header -->
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-teal-50 rounded-3 d-flex align-items-center justify-content-center"
                        style="width: 42px; height: 42px;">
                        <i class="fas fa-file-medical-alt text-teal-600 fs-5"></i>
                    </div>
                    <div>
                        <h1 class="h3 fw-bold text-slate-800 mb-0">Add Vaccination Record</h1>
                        <p class="text-muted small mb-0">Log a new administered vaccination</p>
                    </div>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <a href="{{ route('vaccin_report_index') }}"
                        class="btn btn-outline-secondary d-flex align-items-center gap-2">
                        <i class="fas fa-list"></i> Back to List
                    </a>
                </div>
            </div>

            <!-- Validation errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form -->
            <form action="#" method="POST">
                @csrf

                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label fw-semibold small">Booking ID</label>
                        <input type="number" name="booking_id" value="{{ old('booking_id') }}" class="form-control"
                            placeholder="Enter booking ID" required />
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold small">Administered By (User ID)</label>
                        <input type="number" name="administered_by" value="{{ old('administered_by') }}"
                            class="form-control" placeholder="Enter staff user ID" required />
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-semibold small">Vaccination Date</label>
                        <input type="date" name="vaccination_date" value="{{ old('vaccination_date') }}"
                            class="form-control" required />
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-semibold small">Dose Number</label>
                        <input type="number" name="dose_number" value="{{ old('dose_number', 1) }}" class="form-control"
                            min="1" required />
                    </div>

                    <div class="col-md-4">
                        <label class="form-label fw-semibold small">Next Dose Date</label>
                        <input type="date" name="next_dose_date" value="{{ old('next_dose_date') }}" class="form-control" />
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold small">Status</label>
                        <select name="status" class="form-select" required>
                            <option value="completed" {{ old('status', 'completed') == 'completed' ? 'selected' : '' }}>
                                Completed</option>
                            <option value="pending" {{ old('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label class="form-label fw-semibold small">Side Effects</label>
                        <textarea name="side_effects" class="form-control" rows="2"
                            placeholder="Any reactions or side effects observed...">{{ old('side_effects') }}</textarea>
                    </div>

                    <div class="col-12">
                        <label class="form-label fw-semibold small">Remarks</label>
                        <textarea name="remarks" class="form-control" rows="2"
                            placeholder="Any additional remarks...">{{ old('remarks') }}</textarea>
                    </div>

                </div>

                <!-- Footer Actions -->
                <div class="mt-4 pt-3 border-top d-flex justify-content-end gap-2">
                    <a href="{{ route('vaccin_report_index') }}" class="btn btn-outline-secondary">Cancel</a>
                    <button type="submit" class="btn btn-teal d-flex align-items-center gap-2">
                        <i class="fas fa-save"></i> Save Record
                    </button>
                </div>

            </form>

        </div>
    </div>

@endsection