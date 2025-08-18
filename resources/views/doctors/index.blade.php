@extends('layouts.master')

@section('title', 'Doctors List')

@section('content')
<div class="bootstrap-scope">
    <div class="container-fluid">
        <div class="row me-3">
            <!-- Empty column for sidebar width (adjust according to your sidebar) -->
            <div class="col-md-2"></div>

            <!-- Main content column -->
            <div class="col-md-10 py-4">
                <h2 class="mb-4">Doctors List</h2>

                @if(Auth::user()->role === 'admin')
                <div class="mb-3">
                    <a href="{{ route('doctors.create') }}" class="btn btn-primary">Add New Doctor</a>
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
                                <th>Salary</th>
                                <th>Department</th>
                                 @if(Auth::user()->role === 'admin')  
                                <th>Actions</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($doctors as $doctor)
                                <tr>
                                    <td>{{ $doctor->id }}</td>
                                    <td>{{ $doctor->name }}</td>
                                    <td>{{ $doctor->age }}</td>
                                    <td>{{ $doctor->email }}</td>
                                    <td>{{ $doctor->gender }}</td>
                                    <td>${{ number_format($doctor->salary, 2) }}</td>
                                    <td>{{ $doctor->department->name ?? 'N/A' }}</td>
                                    
                                    @if(Auth::user()->role === 'admin')  
                                    <td>
                                        <a href="{{ route('doctors.edit', $doctor) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('doctors.destroy', $doctor) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this doctor?')">Delete</button>
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
