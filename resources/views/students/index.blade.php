@extends('layouts.master')

@section('title', 'Students List')

@section('content')
<div class="bootstrap-scope">
    <div class="container-fluid">
        <div class="row me-3">
            <!-- Empty column for sidebar width (adjust according to your sidebar) -->
            <div class="col-md-2"></div>

            <!-- Main content column -->
            <div class="col-md-10 py-4">
                <h2 class="mb-4">Students List</h2>
                
                @if(Auth::user()->role === 'admin')
                <div class="mb-3">
                    <a href="{{ route('students.create') }}" class="btn btn-primary">Add New Student</a>
                </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped table-bordered align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Address</th>
                                <th>Doctor</th>
                                <th>Courses</th>
                                @if(Auth::user()->role === 'admin')
                                <th>Actions</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->age }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->status }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->doctor->name ?? 'N/A' }}</td>
                                    <td>{{ $student->course->name ?? 'N/A' }}</td>
                                    @if(Auth::user()->role === 'admin')
                                    <td>
                                        <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this student?')">Delete</button>
                                        </form>
                                    </td>
                                    @endif
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
