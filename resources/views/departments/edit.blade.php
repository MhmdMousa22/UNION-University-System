@extends('layouts.master')

@section('content')
<div class="bootstrap-scope">
    <div class="container-fluid">
        <div class="row me-5">
            <!-- Empty column for sidebar width -->
            <div class="col-md-2"></div>

            <!-- Main content column -->
            <div class="col-md-10 py-4">
                <h2 class="mb-4">Update Department</h2>
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('departments.update', $department->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">Department Name</label>
                                <input 
                                    type="text" 
                                    name="name" 
                                    id="name" 
                                    class="form-control" 
                                    value="{{ old('name', $department->name) }}" 
                                    placeholder="Enter department name" 
                                    required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Department</button>
                            <a href="{{ route('departments.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
