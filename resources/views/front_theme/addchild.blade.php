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

        <form method="POST" action="#" enctype="multipart/form-data">
            @csrf

            <div class="upload-box" style="margin-bottom:24px;">
                <div class="ic"><i class="bi bi-camera"></i></div>
                <div style="flex:1;">
                    <strong>Child's Photo</strong><br>
                    <span>PNG or JPG, up to 2MB (optional — helps identify your child at the clinic)</span>
                </div>
                <label class="btn btn-ghost btn-sm" style="cursor:pointer;">
                    Upload
                    <input type="file" name="photo" accept="image/*" style="display:none;">
                </label>
            </div>

            <div class="form-grid">
                <div class="field">
                    <label>Full Name <span class="req">*</span></label>
                    <input type="text" name="child_name" placeholder="e.g. Ayesha Khan" required
                        value="{{ old('child_name') }}">
                </div>

                <div class="field">
                    <label>Date of Birth <span class="req">*</span></label>
                    <input type="date" name="dob" required value="{{ old('dob') }}">
                </div>

                <div class="field">
                    <label>Gender <span class="req">*</span></label>
                    <select name="gender" required>
                        <option value="" disabled selected>Select gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
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
                    <label>Birth Weight (kg)</label>
                    <input type="number" step="0.1" name="birth_weight" placeholder="e.g. 3.2">
                </div>

                <div class="field">
                    <label>Relationship to Child <span class="req">*</span></label>
                    <select name="relationship" required>
                        <option value="" disabled selected>Select relation</option>
                        <option value="mother">Mother</option>
                        <option value="father">Father</option>
                        <option value="guardian">Legal Guardian</option>
                    </select>
                </div>

                <div class="field full">
                    <label><input type="checkbox" id="sameAddress"
                            onchange="document.getElementById('addrField').style.display=this.checked?'none':'block'"
                            checked> Use my home address for this child</label>
                </div>

                <div class="field full" id="addrField" style="display:none;">
                    <label>Child's Address</label>
                    <textarea name="address" rows="2" placeholder="House no, street, area, city"></textarea>
                </div>

                <div class="field full">
                    <label>Notes for Doctor</label>
                    <textarea name="notes" rows="3"
                        placeholder="Any allergies, medical conditions, or previous vaccination history (optional)"></textarea>
                    <small>This helps the clinic prepare before your child's first appointment.</small>
                </div>
            </div>

            <div class="form-actions">
                <a href="#" class="btn btn-outline">Cancel</a>
                <button type="submit" class="btn btn-primary"><i class="bi bi-check2"></i> Save Child</button>
            </div>
        </form>
    </div>
@endsection