@extends('front_theme._mastertheme')

@section('fornt_body')

    <div class="container mt-5 card">
        <div class="card-head">
            <div>
                <span class="eyebrow"><i class="bi bi-calendar-plus"></i> New Booking</span>
                <h2>Appointment Details</h2>
            </div>
        </div>

        <div class="steps">
            <div class="step done"></div>
            <div class="step done"></div>
            <div class="step"></div>
        </div>

        <form method="POST" action="#">
            @csrf
            <div class="form-grid">
                <div class="field">
                    <label>Select Child <span class="req">*</span></label>
                    <select name="child_id" required>
                        <option value="" disabled selected>Choose your child</option>
                        <option value="1">Ayesha Khan — 2 yrs 3 mo</option>
                        <option value="2">Hamza Khan — 7 mo</option>
                    </select>
                </div>

                <div class="field">
                    <label>Vaccine <span class="req">*</span></label>
                    <select name="vaccine_id" required>
                        <option value="" disabled selected>Choose vaccine</option>
                        <option>Measles (1st Dose)</option>
                        <option>MMR (1st Dose)</option>
                        <option>Polio Booster</option>
                        <option>DPT Booster</option>
                        <option>Hepatitis B</option>
                    </select>
                </div>

                <div class="field">
                    <label>Hospital / Clinic <span class="req">*</span></label>
                    <select name="hospital_id" required>
                        <option value="" disabled selected>Choose location</option>
                        <option>Care4Kids Clinic — Gulshan</option>
                        <option>Care4Kids Clinic — DHA</option>
                        <option>City General Hospital</option>
                    </select>
                </div>

                <div class="field">
                    <label>Preferred Date <span class="req">*</span></label>
                    <input type="date" name="date" required min="{{ date('Y-m-d') }}">
                </div>

                <div class="field">
                    <label>Preferred Time <span class="req">*</span></label>
                    <select name="time" required>
                        <option value="" disabled selected>Choose a slot</option>
                        <option>09:00 AM – 10:00 AM</option>
                        <option>10:00 AM – 11:00 AM</option>
                        <option>02:00 PM – 03:00 PM</option>
                        <option>04:00 PM – 05:00 PM</option>
                    </select>
                </div>

                <div class="field">
                    <label>Contact Number <span class="req">*</span></label>
                    <input type="tel" name="phone" placeholder="03XX-XXXXXXX" required>
                </div>

                <div class="field full">
                    <label>Notes for the Doctor</label>
                    <textarea name="notes" rows="3"
                        placeholder="Any symptoms, allergies, or special requests (optional)"></textarea>
                </div>
            </div>

            <div class="form-actions">
                <a href="#" class="btn btn-outline">Cancel</a>
                <button type="submit" class="btn btn-primary"><i class="bi bi-calendar-check"></i> Confirm
                    Appointment</button>
            </div>
        </form>
    </div>
@endsection