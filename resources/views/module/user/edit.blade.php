@extends('dashboard._mastertheme')

@section('user')
    active
@endsection

@section('body')
<style>
    :root {
        --emerald-primary: #0d5c46;
        --emerald-hover: #084333;
        --emerald-light-bg: #e8f5e9;
        --emerald-badge-bg: #e0f2f1;
    }

    .btn-emerald {
        background-color: var(--emerald-primary) !important;
        color: #ffffff !important;
        border: none;
    }
    .btn-emerald:hover {
        background-color: var(--emerald-hover) !important;
        color: #ffffff !important;
    }

    .badge-emerald {
        background-color: var(--emerald-badge-bg) !important;
        color: var(--emerald-primary) !important;
    }

    .text-emerald {
        color: var(--emerald-primary) !important;
    }

    .form-control:focus, .form-select:focus {
        border-color: var(--emerald-primary) !important;
        box-shadow: 0 0 0 0.25rem rgba(13, 92, 70, 0.15) !important;
    }
</style>

<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold text-dark mb-0 d-flex align-items-center gap-2">
                <i class="bi bi-pencil-square text-emerald"></i> Edit User
            </h2>
        </div>
        <a href="{{ route('user_view') }}" class="btn btn-light border rounded-3 fw-semibold text-secondary">
            &larr; Back to Users
        </a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mb-4">
            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4">
            <form action="{{ route('user_update_action', ['id' => $user_item->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="d-flex align-items-center gap-2 mb-1">
                    <span class="badge badge-emerald p-2 rounded-3">
                        <i class="bi bi-pencil-fill fs-6"></i>
                    </span>
                    <h5 class="fw-bold text-dark mb-0">User Information</h5>
                </div>
                <p class="text-muted small mb-4 ms-1">Update user account details.</p>

                <div class="row g-3">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label text-secondary fw-semibold">Full name</label>
                       <input type="text" class="form-control form-control-lg rounded-3 border-light-subtle shadow-none"
    id="name" name="name" value="{{ old('name', $user_item->name) }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="role" class="form-label text-secondary fw-semibold">Roles</label>
                        <select class="form-select form-select-lg rounded-3 border-light-subtle shadow-none text-capitalize"
                            id="role" name="role" required>
                            <option value="" disabled>Select a role</option>
                            @foreach ($roles as $role_item)
                                <option value="{{ $role_item->name }}"
                                    {{ old('role', $user_item->roles->first()->name ?? '') == $role_item->name ? 'selected' : '' }}>
                                    {{ $role_item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label text-secondary fw-semibold">Email</label>
                        <input type="email" class="form-control form-control-lg rounded-3 border-light-subtle shadow-none"
                            id="email" name="email" value="{{ old('email', $user_item->email) }}" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label text-secondary fw-semibold">Phone</label>
                        <input type="text" class="form-control form-control-lg rounded-3 border-light-subtle shadow-none"
                            id="phone" name="phone" value="{{ old('phone', $user_item->phone) }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="password" class="form-label text-secondary fw-semibold">Password</label>
                        <input type="password" class="form-control form-control-lg rounded-3 border-light-subtle shadow-none"
                            id="password" name="password" placeholder="Leave blank to keep current password">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="password_confirmation" class="form-label text-secondary fw-semibold">Confirm Password</label>
                        <input type="password" class="form-control form-control-lg rounded-3 border-light-subtle shadow-none"
                            id="password_confirmation" name="password_confirmation" placeholder="Re-enter new password">
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 pt-3">
                    <a href="{{ route('user_view') }}" class="btn btn-light border px-4 py-2 rounded-3 text-secondary fw-semibold">Cancel</a>
                    <button type="submit" class="btn btn-emerald px-4 py-2 rounded-3 fw-semibold d-flex align-items-center gap-2">
                        <i class="bi bi-save"></i> Update User
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection