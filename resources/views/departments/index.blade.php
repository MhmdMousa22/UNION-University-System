@extends('layouts.master')

@section('title', 'Departments List')

@section('content')
<div class="bootstrap-scope">
    <div class="container-fluid">
        <div class="row me-3">
            <!-- Empty column for sidebar width (adjust according to your sidebar) -->
            <div class="col-md-2"></div>

            <!-- Main content column -->
            <div class="col-md-10 py-4">
                <h2 class="mb-4">Departments List</h2>

                @if(Auth::user()->role === 'admin')
                <div class="mb-3">
                    <a href="{{ route('departments.create') }}" class="btn btn-primary">Add New Department</a>
                </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped table-bordered align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                @if(Auth::user()->role === 'admin')
                                <th>Actions</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($departments as $department)
                                <tr>
                                    <td>{{ $department->id }}</td>
                                    <td>{{ $department->name }}</td>

                                    @if(Auth::user()->role === 'admin')
                                    <td>
                                        <a href="{{ route('departments.edit', $department) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('departments.destroy', $department) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this department?')">Delete</button>
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
