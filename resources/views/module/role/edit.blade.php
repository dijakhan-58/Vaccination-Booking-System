@extends('dashboard._mastertheme')

@section('role')
    active
@endsection

@section('body')
    <style>
        :root {
            --emerald-primary: #0d5c46;
            --emerald-hover: #084333;
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

        .text-emerald {
            color: var(--emerald-primary) !important;
        }

        .form-check-input:checked {
            background-color: var(--emerald-primary) !important;
            border-color: var(--emerald-primary) !important;
        }
    </style>

    <div class="container-fluid p-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <span class="text-emerald fw-bold text-uppercase small tracking-wide">MODULE</span>
                <h2 class="fw-bold text-dark mb-0 d-flex align-items-center gap-2">
                    <i class="bi bi-shield-lock-fill text-emerald"></i> Edit Role
                </h2>
            </div>
            <a href="{{ route('role_view') }}" class="btn btn-light border rounded-3 fw-semibold text-secondary">
                &larr; Back to Roles
            </a>
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

        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-4">
   <!-- Fixed -->
<form action="{{ route('role_update_action', ['id' => $findrole->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="rolename" class="form-label text-secondary fw-semibold">Role name</label>
                        <input type="text" class="form-control form-control-lg rounded-3 border-light-subtle shadow-none"
                            id="rolename" name="rolename" value="{{ old('rolename', $findrole->name) }}" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label text-secondary fw-semibold d-block mb-3">Permissions:</label>
                        <div class="d-flex flex-wrap align-items-center gap-3">
                            @foreach ($permission_data as $index => $data_permission_item)
                                @php
                                    $is_checked = "";
                                @endphp

                                @for ($i = 0; $i < count($findrole->permissions); $i++)
                                    @if ($data_permission_item->name == $findrole->permissions[$i]->name)
                                        @php
                                            $is_checked = "checked";
                                        @endphp
                                    @endif
                                @endfor

                                <div class="form-check me-2">
                                    <input class="form-check-input" type="checkbox" name="permission[]"
                                        value="{{ $data_permission_item->name }}" id="permission-{{ $index }}"
                                        {{ $is_checked }}>
                                    <label class="form-check-label text-dark fw-medium" for="permission-{{ $index }}">
                                        {{ $data_permission_item->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2 pt-3">
                        <a href="{{ route('role_view') }}"
                            class="btn btn-light border px-4 py-2 rounded-3 text-secondary fw-semibold">Cancel</a>
                        <button type="submit"
                            class="btn btn-emerald px-4 py-2 rounded-3 fw-semibold d-flex align-items-center gap-2">
                            <i class="bi bi-save"></i> Update Role
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection