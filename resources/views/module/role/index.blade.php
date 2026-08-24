@extends('dashboard._mastertheme')

@section('role')
    active
@endsection

@section('body')
   

    <div class="container-fluid p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <span class="text-emerald fw-bold text-uppercase small tracking-wide">MODULE</span>
                <h2 class="fw-bold text-dark mb-0 d-flex align-items-center gap-2">
                    <i class="bi bi-shield-check text-emerald"></i> All Roles
                </h2>
                <small class="text-muted">Manage system roles and assigned permissions</small>
            </div>
            <a href="{{ route('role_create') }}"
                class="btn btn-emerald px-4 py-2 rounded-3 fw-semibold d-flex align-items-center gap-2">
                <i class="bi bi-plus-lg"></i> Add New Role
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
                    <table class="table table-hover align-middle mb-0" id="ordersTable" data-searchable-table>
                        <thead class="table-light-header border-bottom">
                            <tr>
                                <th scope="col" class="ps-4 py-3" style="width: 5%;">ID</th>
                                <th scope="col" class="py-3" style="width: 20%;">ROLE NAME</th>
                                <th scope="col" class="py-3" style="width: 55%;">PERMISSIONS</th>
                                <th scope="col" class="text-end pe-4 py-3" style="width: 20%;">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($role as $index => $role_item)
                                <tr>
                                    <td class="ps-4 fw-semibold text-secondary">{{ ++$index }}</td>
                                    <td><span class="fw-bold text-dark text-capitalize">{{ $role_item->name }}</span></td>
                                    <td>
                                        <div class="d-flex flex-wrap gap-1">
                                            @foreach ($role_item->permissions as $permissions)
                                                <span
                                                    class="badge badge-emerald rounded-2 fw-normal">{{ $permissions->name . ',' }},</span>
                                            @endforeach
                                        </div>
                                    </td>
                                    <td class="text-end pe-4 align-middle">
                                        <div class="d-inline-flex align-items-center gap-1">
                                       
                                            <a href="{{ route('role_edit', ['id' => $role_item->id]) }}"
                                                class="btn btn-sm btn-edit-subtle rounded-2 d-inline-flex align-items-center gap-1 px-2.5 py-1"
                                                title="Edit Role">
                                                <i class="bi bi-pencil-square"></i>
                                                <span class="d-none d-md-inline fw-medium">Edit</span>
                                            </a>

                                            
                                            <form action="{{ route('role_delete_action', $role_item->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn btn-sm btn-delete-subtle rounded-2 d-inline-flex align-items-center gap-1 px-2.5 py-1"
                                                    onclick="return confirm('Are you sure you want to delete this role?');"
                                                    title="Delete Role">
                                                    <i class="bi bi-trash"></i>
                                                    <span class="d-none d-md-inline fw-medium">Delete</span>
                                                </button>
                                            </form>
                                        </div>
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
