@extends('layouts.master')

@section('content')
<div class="bootstrap-scope">
    <div class="container-fluid">
        <div class="row me-5">
            <!-- Empty column for sidebar width (adjust according to your sidebar) -->
            <div class="col-md-2"></div>

            <!-- Main content column -->
            <div class="col-md-10 py-4">
                <h2 class="mb-4">Add Course</h2>
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('courses.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Course Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter course name" required>
                            </div>

                            <div class="mb-3">
                                <label for="cost" class="form-label">Cost</label>
                                <input type="number" step="0.01" name="cost" id="cost" class="form-control" placeholder="Enter cost" required>
                            </div>

                            <div class="mb-3">
                                <label for="hours" class="form-label">Hours</label>
                                <input type="number" name="hours" id="hours" class="form-control" placeholder="Enter hours" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Course</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
