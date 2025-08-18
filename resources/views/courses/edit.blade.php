@extends('layouts.master')

@section('content')
<div class="bootstrap-scope">
    <div class="container-fluid">
        <div class="row me-5">
            <!-- Empty column for sidebar width -->
            <div class="col-md-2"></div>

            <!-- Main content column -->
            <div class="col-md-10 py-4">
                <h2 class="mb-4">Update Course</h2>
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('courses.update', $course->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">Course Name</label>
                                <input 
                                    type="text" 
                                    name="name" 
                                    id="name" 
                                    class="form-control" 
                                    value="{{ old('name', $course->name) }}" 
                                    placeholder="Enter course name" 
                                    required>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="cost" class="form-label">Cost</label>
                                    <input 
                                        type="number" 
                                        step="0.01" 
                                        name="cost" 
                                        id="cost" 
                                        class="form-control" 
                                        value="{{ old('cost', $course->cost) }}" 
                                        placeholder="Enter course cost" 
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label for="hours" class="form-label">Hours</label>
                                    <input 
                                        type="number" 
                                        name="hours" 
                                        id="hours" 
                                        class="form-control" 
                                        value="{{ old('hours', $course->hours) }}" 
                                        placeholder="Enter course hours" 
                                        required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Course</button>
                            <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
