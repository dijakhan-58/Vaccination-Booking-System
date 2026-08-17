@extends('dashboard._mastertheme')

@section('user')
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

        .badge-emerald {
            background-color: var(--emerald-badge-bg) !important;
            color: var(--emerald-primary) !important;
        }

        .text-emerald {
            color: var(--emerald-primary) !important;
        }

        .table-light-header th {
            background-color: #f8f9fa;
            color: #6c757d;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
    </style>

    <div class="container-fluid p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <span class="text-emerald fw-bold text-uppercase small tracking-wide">MODULE</span>
                <h2 class="fw-bold text-dark mb-0 d-flex align-items-center gap-2">
                    <i class="bi bi-people-fill text-emerald"></i> All Users
                </h2>
                <small class="text-muted">Manage system users and assigned roles</small>
            </div>
            <a href="{{ route('user_create') }}" class="btn btn-emerald px-4 py-2 rounded-3 fw-semibold d-flex align-items-center gap-2">
                <i class="bi bi-person-plus-fill"></i> Add New User
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light-header border-bottom">
                            <tr>
                                <th scope="col" class="ps-4 py-3" style="width: 5%;">ID</th>
                                <th scope="col" class="py-3" style="width: 25%;">NAME</th>
                                <th scope="col" class="py-3" style="width: 25%;">EMAIL</th>
                                <th scope="col" class="py-3" style="width: 15%;">PHONE</th>
                                <th scope="col" class="py-3" style="width: 15%;">ROLES</th>
                                <th scope="col" class="text-end pe-4 py-3" style="width: 15%;">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $index => $user_item)
                                <tr>
                                    <td class="ps-4 fw-semibold text-secondary">{{ ++$index }}</td>
                                    <td>
                                        <div class="fw-bold text-dark text-capitalize">{{ $user_item->name }}</div>
                                    </td>
                                    <td class="text-secondary">{{ $user_item->email }}</td>
                                    <td class="text-secondary">{{ $user_item->phone ?? 'N/A' }}</td>
                                    <td>
                                        <div class="d-flex flex-wrap gap-1">
                                            @foreach ($user_item->roles as $role)
                                                <span class="badge badge-emerald rounded-2 fw-normal text-capitalize">{{ $role->name }}</span>
                                            @endforeach
                                        </div>
                                    </td>
                                    <td class="text-end pe-4">
                                        <a href="{{ route('user_edit', ['id' => $user_item->id]) }}"
                                            class="btn btn-sm btn-light border text-warning me-1 rounded-2">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <form action="{{ route('user_delete_action', $user_item->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger rounded-2"
                                                onclick="return confirm('Are you sure you want to delete this user?')">
                                                <i class="bi bi-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection