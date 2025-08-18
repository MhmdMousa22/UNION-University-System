@extends('layouts.master')

@section('content')
<div class="bootstrap-scope">
    <div class="container-fluid">
        <div class="row me-5">
            <!-- Empty column for sidebar width -->
            <div class="col-md-2"></div>

            <!-- Main content column -->
            <div class="col-md-10 py-4">
                <h2 class="mb-4">Add Employee</h2>
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('employees.store') }}" method="POST">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter name" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="number" name="age" id="age" class="form-control" placeholder="Enter age" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select name="gender" id="gender" class="form-select" required>
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" name="position" id="position" class="form-control" placeholder="Enter position" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" required>
                            </div>

                            <div class="mb-3">
                                <label for="salary" class="form-label">Salary</label>
                                <input type="number" step="0.01" name="salary" id="salary" class="form-control" placeholder="Enter salary" required>
                            </div>

                            <div class="mb-3">
                                <label for="admin_id" class="form-label">Admin</label>
                                <select name="admin_id" id="admin_id" class="form-select" required>
                                    <option value="" disabled selected>Select Admin</option>
                                    @foreach($admins as $admin)
                                        <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Employee</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
