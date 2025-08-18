@extends('layouts.master')

@section('title', 'Employees List')

@section('content')
<div class="bootstrap-scope">
    <div class="container-fluid">
        <div class="row me-3">
            <!-- Empty column for sidebar width -->
            <div class="col-md-2"></div>

            <!-- Main content column -->
            <div class="col-md-10 py-4">
                <h2 class="mb-4">Employees List</h2>

                <div class="mb-3">
                    <a href="{{ route('employees.create') }}" class="btn btn-primary">Add New Employee</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Position</th>
                                <th>Salary</th>
                                <th>Admin</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->age }}</td>
                                    <td>{{ $employee->gender }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->position }}</td>
                                    <td>${{ number_format($employee->salary, 2) }}</td>
                                    <td>{{ $employee->admin->name ?? 'N/A' }}</td>
                                    <td>
                                        <a href="{{ route('employees.edit', $employee) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('employees.destroy', $employee) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this employee?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div> <!-- End Main content column -->
        </div> <!-- End Row -->
    </div> <!-- End Container-fluid -->
</div>
@endsection
