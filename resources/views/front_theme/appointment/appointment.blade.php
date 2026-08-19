@extends('front_theme._mastertheme')

@section('fornt_body')

            <div class="container mt-5 card">

                <div class="card-head">
                    <div>
                        <span class="eyebrow">
                            <i class="bi bi-calendar-plus"></i> New Booking
                        </span>

                        <h2>Appointment Details</h2>
                    </div>
                </div>


                <div class="steps">
                    <div class="step done"></div>
                    <div class="step done"></div>
                    <div class="step"></div>
                </div>


                {{-- Errors --}}
                @if ($errors->any())

                    <div class="alert alert-danger">

                        <ul class="mb-0">

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif


                {{-- Appointment Form --}}
                <form method="POST" action="{{ route('parent.appointment.store') }}">

                    @csrf


                    <div class="form-grid">


                        {{-- Child --}}
                        <div class="field">

                            <label>
                                Select Child
                                <span class="req">*</span>
                            </label>

                            <select name="child_id" required>

                                <option value="">
                                    Choose your child
                                </option>

                                @foreach ($children as $child)

                                    <option value="{{ $child->id }}">

                                        {{ $child->first_name }}
                                        {{ $child->last_name }}

                                    </option>

                                @endforeach

                            </select>

                        </div>


                        {{-- Vaccine --}}
                        <div class="field">

                            <label>
                                Vaccine
                                <span class="req">*</span>
                            </label>

                            <select name="vaccine_id" required>

                                <option value="">
                                    Choose vaccine
                                </option>

                                @foreach ($vaccines as $vaccine)

                                    <option value="{{ $vaccine->id }}">

                                        {{ $vaccine->name }}

                                    </option>

                                @endforeach

                            </select>

                        </div>


                        {{-- Hospital --}}
                        <div class="field">

                            <label>
                                Hospital / Clinic
                                <span class="req">*</span>
                            </label>

                            <select name="hospital_id" required>

                                <option value="">
                                    Choose location
                                </option>

                                @foreach ($hospitals as $hospital)

                                    <option value="{{ $hospital->id }}">

                                        {{ $hospital->name }}

                                    </option>

                                @endforeach

                            </select>

                        </div>


                        {{-- Preferred Date --}}
                        <div class="field">

                            <label>
                                Preferred Date
                                <span class="req">*</span>
                            </label>

    <input type="date" name="preferred_date" required>                    </div>


                        {{-- Appointment Time --}}
                        <div class="field">

                            <label>
                                Preferred Time
                            </label>

                            <input type="time" name="appointment_time">

                        </div>


                        {{-- Reason --}}
                        <div class="field field-full">

                            <label>
                                Reason (optional)
                            </label>

                            <textarea name="reason" maxlength="255"
                                placeholder="Any specific reason for this appointment"></textarea>

                        </div>


                    </div>


                    {{-- Buttons --}}
                    <div class="form-actions">

                        <a href="{{ route('parent.childDetail') }}" class="btn btn-outline">

                            Cancel

                        </a>


                        <button type="submit" class="btn btn-primary">

                            <i class="bi bi-calendar-check"></i>

                            Confirm Appointment

                        </button>

                    </div>

                </form>

            </div>

@endsection