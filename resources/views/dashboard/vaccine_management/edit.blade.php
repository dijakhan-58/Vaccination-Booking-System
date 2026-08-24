@extends('dashboard._mastertheme')

@section('title', 'Edit Vaccine')

@section('body')

    <div class="container-fluid py-4 px-3 px-md-4" style="max-width: 1400px;">

        <div class="card card-custom p-3 p-md-4">


            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">

                <div class="d-flex align-items-center gap-3">

                    <div class="bg-teal-50 rounded-3 d-flex align-items-center justify-content-center"
                        style="width: 42px; height: 42px;">

                        <i class="fas fa-syringe text-teal-600 fs-5"></i>

                    </div>

                    <div>
                        <h1 class="h3 fw-bold text-slate-800 mb-0">
                            Edit Vaccine
                        </h1>

                        <p class="text-muted small mb-0">
                            Update vaccine information
                        </p>
                    </div>

                </div>

                <div class="d-flex gap-2 flex-wrap">

                    <a href="{{ route('vaccines.index') }}"
                        class="btn btn-outline-secondary d-flex align-items-center gap-2">

                        <i class="fas fa-list"></i>
                        Back to List

                    </a>

                </div>

            </div>



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


            <form action="{{ route('vaccines.update', $vaccine->id) }}" method="POST">

                @csrf



                <div class="row g-3">


                    <div class="col-md-6">

                        <label class="form-label fw-semibold small">
                            Vaccine Name
                        </label>

                        <input type="text" name="name" value="{{ old('name', $vaccine->name) }}" class="form-control"
                            placeholder="e.g. DTaP" required>

                    </div>



                    <div class="col-md-6">

                        <label class="form-label fw-semibold small">
                            Disease
                        </label>

                        <input type="text" name="disease" value="{{ old('disease', $vaccine->disease) }}"
                            class="form-control" placeholder="Diphtheria, Tetanus, Pertussis" required>

                    </div>



                    <div class="col-12">

                        <label class="form-label fw-semibold small">
                            Description
                        </label>

                        <textarea name="description" class="form-control" rows="2" placeholder="Vaccine description...">{{ old('description', $vaccine->description) }}</textarea>

                    </div>



                    <div class="col-md-4">

                        <label class="form-label fw-semibold small">
                            Dose Count
                        </label>

                        <input type="number" name="dose_count" value="{{ old('dose_count', $vaccine->dose_count) }}"
                            class="form-control" min="1" required>

                    </div>
                    


                    <div class="col-md-4">

                        <label class="form-label fw-semibold small">
                            Manufacturer
                        </label>

                        <input type="text" name="manufacturer" value="{{ old('manufacturer', $vaccine->manufacturer) }}"
                            class="form-control" placeholder="e.g. Sanofi" required>

                    </div>



                    <div class="col-md-4">

                        <label class="form-label fw-semibold small">
                            Recommended Age (days)
                        </label>

                        <input type="number" name="recommended_age_days"
                            value="{{ old('recommended_age_days', $vaccine->recommended_age_days) }}" class="form-control"
                            min="0" required>

                    </div>



                    <div class="col-md-6">
                        <label class="form-label fw-semibold small">
                            Availability Status
                        </label>

                        <select name="availability_status" class="form-select" required>

                            <option value="available"
                                {{ old('availability_status', $vaccine->availability_status) == 'available' ? 'selected' : '' }}>
                                Available
                            </option>

                            <option value="limited"
                                {{ old('availability_status', $vaccine->availability_status) == 'limited' ? 'selected' : '' }}>
                                Limited
                            </option>

                            <option value="out_of_stock"
                                {{ old('availability_status', $vaccine->availability_status) == 'out_of_stock' ? 'selected' : '' }}>
                                Out of Stock
                            </option>

                        </select>
                    </div>





                </div>



                <div class="mt-4 pt-3 border-top d-flex justify-content-end gap-2">

                    <a href="{{ route('vaccines.index') }}" class="btn btn-outline-secondary">

                        Cancel

                    </a>

                    <button type="submit" class="btn btn-teal d-flex align-items-center gap-2">

                        <i class="fas fa-save"></i>

                        Update Vaccine

                    </button>

                </div>


            </form>

        </div>

    </div>

@endsection
