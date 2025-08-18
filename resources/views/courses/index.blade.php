@extends('layouts.master')

@section('title', 'Courses List')

@section('content')
<div class="bootstrap-scope">
    <div class="container-fluid">
        <div class="row me-3">
            <!-- Empty column for sidebar width (adjust according to your sidebar) -->
            <div class="col-md-2"></div>

            <!-- Main content column -->
            <div class="col-md-10 py-4">
                <h2 class="mb-4">Courses List</h2>

                @if(Auth::user()->role === 'admin')  
                <div class="mb-3">
                    <a href="{{ route('courses.create') }}" class="btn btn-primary">Add New Course</a>
                </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped table-bordered align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Cost</th>
                                <th>Hours</th>
                                @if(Auth::user()->role === 'admin')
                                <th>Actions</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{ $course->id }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>${{ number_format($course->cost, 2) }}</td>
                                    <td>{{ $course->hours }}</td>
                                    @if(Auth::user()->role === 'admin')
                                    <td>
                                        <a href="{{ route('courses.edit', $course) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('courses.destroy', $course) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this course?')">Delete</button>
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
