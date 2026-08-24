@extends('front_theme._mastertheme')

@section('fornt_body')

    <div class="container mt-5 card">

        <div class="card-head">
            <div>
                <span class="eyebrow">
                    <i class="bi bi-pencil"></i> Edit Booking
                </span>

                <h2>Update Appointment</h2>
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



        <form method="POST" action="{{ route('parent.editAppointment.update', $appointment->id) }}">

            @csrf
            @method('PUT')


            <div class="form-grid">


                <div class="field">

                    <label>
                        Select Child
                        <span class="req">*</span>
                    </label>

                    <select name="child_id" required>

                        <option value="" disabled>
                            Choose your child
                        </option>

                        @foreach ($children as $child)
                            <option value="{{ $child->id }}" @if ($appointment->child_id == $child->id) selected @endif>

                                {{ $child->first_name }}
                                {{ $child->last_name }}

                            </option>
                        @endforeach

                    </select>

                </div>



                <div class="field">

                    <label>
                        Vaccine
                        <span class="req">*</span>
                    </label>

                    <select name="vaccine_id" required>

                        <option value="" disabled>
                            Choose vaccine
                        </option>

                        @foreach ($vaccines as $vaccine)
                            <option value="{{ $vaccine->id }}" @if ($appointment->vaccine_id == $vaccine->id) selected @endif>

                                {{ $vaccine->name }}

                            </option>
                        @endforeach

                    </select>

                </div>



                <div class="field">

                    <label>
                        Hospital / Clinic
                        <span class="req">*</span>
                    </label>

                    <select name="hospital_id" required>

                        <option value="" disabled>
                            Choose location
                        </option>

                        @foreach ($hospitals as $hospital)
                            <option value="{{ $hospital->id }}" @if ($appointment->hospital_id == $hospital->id) selected @endif>

                                {{ $hospital->name }}

                            </option>
                        @endforeach

                    </select>

                </div>




                <div class="field">

                    <label>
                        Preferred Date
                        <span class="req">*</span>
                    </label>

                    <input type="date" name="preferred_date" min="{{ date('Y-m-d') }}"
                        value="{{ $appointment->preferred_date->format('Y-m-d') }}" required>

                </div>



                <div class="field">

                    <label>
                        Preferred Time
                    </label>

                    <input type="time" name="appointment_time" value="{{ $appointment->appointment_time }}">

                </div>



                <div class="field field-full">

                    <label>
                        Reason (optional)
                    </label>

                    <textarea name="reason" maxlength="255">{{ $appointment->reason }}</textarea>

                </div>


            </div>



            <div class="form-actions">

                <a href="{{ route('parent.viewAppointment') }}" class="btn btn-outline">

                    Cancel

                </a>


                <button type="submit" class="btn btn-primary">

                    <i class="bi bi-check2"></i>

                    Update Appointment

                </button>

            </div>

        </form>

    </div>

@endsection
