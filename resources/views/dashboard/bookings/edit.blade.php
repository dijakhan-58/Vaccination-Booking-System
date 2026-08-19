@extends('dashboard._mastertheme')

@section('title', 'Edit Booking')

@section('body')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                <i class="bi bi-calendar-check"></i> Edit Booking
            </h1>
            <a href="{{ route('bookings.index') }}" class="btn btn-secondary btn-sm">
                <i class="bi bi-arrow-left"></i> Back to List
            </a>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-teal-600">Booking Information</h6>
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

                <form action="{{ route('bookings.update', $booking) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">

                        <!-- Child -->
                        <div class="col-md-6 mb-3">
                            <label for="child_id" class="form-label fw-bold">
                                <i class="bi bi-person"></i> Child <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" id="child_id" name="child_id" required>
                                <option value="">Select Child</option>
                                @foreach ($children as $child)
                                    <option value="{{ $child->id }}" {{ old('child_id', $booking->child_id) == $child->id ? 'selected' : '' }}>
                                        {{ $child->first_name }} {{ $child->last_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Vaccine -->
                        <div class="col-md-6 mb-3">
                            <label for="vaccine_id" class="form-label fw-bold">
                                <i class="bi bi-clipboard2-pulse"></i> Vaccine <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" id="vaccine_id" name="vaccine_id" required>
                                <option value="">Select Vaccine</option>
                                @foreach ($vaccines as $vaccine)
                                    <option value="{{ $vaccine->id }}" {{ old('vaccine_id', $booking->vaccine_id) == $vaccine->id ? 'selected' : '' }}>
                                        {{ $vaccine->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Hospital -->
                        <div class="col-md-6 mb-3">
                            <label for="hospital_id" class="form-label fw-bold">
                                <i class="bi bi-hospital"></i> Hospital <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" id="hospital_id" name="hospital_id" required>
                                <option value="">Select Hospital</option>
                                @foreach ($hospitals as $hospital)
                                    <option value="{{ $hospital->id }}" {{ old('hospital_id', $booking->hospital_id) == $hospital->id ? 'selected' : '' }}>
                                        {{ $hospital->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Status -->
                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label fw-bold">
                                <i class="bi bi-info-circle"></i> Status <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" id="status" name="status" required>
                                @foreach (['pending', 'approved', 'completed', 'cancelled'] as $status)
                                    <option value="{{ $status }}" {{ old('status', $booking->status) == $status ? 'selected' : '' }}>
                                        {{ ucfirst($status) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Preferred Date -->
                        <div class="col-md-6 mb-3">
                            <label for="preferred_date" class="form-label fw-bold">
                                <i class="bi bi-calendar3"></i> Preferred Date <span class="text-danger">*</span>
                            </label>
                            <input type="date" class="form-control" id="preferred_date" name="preferred_date"
                                value="{{ old('preferred_date', $booking->preferred_date->format('Y-m-d')) }}" required>
                        </div>

                        <!-- Appointment Time -->
                        <div class="col-md-6 mb-3">
                            <label for="appointment_time" class="form-label fw-bold">
                                <i class="bi bi-clock"></i> Appointment Time
                            </label>
                            <input type="time" class="form-control" id="appointment_time" name="appointment_time"
                                value="{{ old('appointment_time', $booking->appointment_time) }}">
                        </div>

                        <!-- Reason -->
                        <div class="col-12 mb-3">
                            <label for="reason" class="form-label fw-bold">
                                <i class="bi bi-file-text"></i> Reason
                            </label>
                            <textarea class="form-control" id="reason" name="reason"
                                rows="3" maxlength="255">{{ old('reason', $booking->reason) }}</textarea>
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <hr>
                            <button type="submit" class="btn btn-primary mt-4">
                                <i class="bi bi-save"></i> Update Booking
                            </button>
                            <a href="{{ route('bookings.index') }}" class="btn btn-secondary mt-4">
                                <i class="bi bi-x-circle"></i> Cancel
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection