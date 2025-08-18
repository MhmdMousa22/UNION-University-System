@extends('layouts.master')

@section('content')
<div class="bootstrap-scope">
    <div class="container-fluid">
        <div class="row me-5">
            <!-- Empty column for sidebar width -->
            <div class="col-md-2"></div>

            <!-- Main content column -->
            <div class="col-md-10 py-4">
                <h2 class="mb-4">Update Doctor</h2>
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input 
                                        type="text" 
                                        name="name" 
                                        id="name" 
                                        class="form-control" 
                                        value="{{ old('name', $doctor->name) }}" 
                                        placeholder="Enter name" 
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <label for="age" class="form-label">Age</label>
                                    <input 
                                        type="number" 
                                        name="age" 
                                        id="age" 
                                        class="form-control" 
                                        value="{{ old('age', $doctor->age) }}" 
                                        placeholder="Enter age" 
                                        required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select name="gender" id="gender" class="form-select" required>
                                        <option value="" disabled>Select Gender</option>
                                        <option value="Male" {{ old('gender', $doctor->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ old('gender', $doctor->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="salary" class="form-label">Salary</label>
                                    <input 
                                        type="number" 
                                        step="0.01" 
                                        name="salary" 
                                        id="salary" 
                                        class="form-control" 
                                        value="{{ old('salary', $doctor->salary) }}" 
                                        placeholder="Enter salary" 
                                        required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input 
                                    type="email" 
                                    name="email" 
                                    id="email" 
                                    class="form-control" 
                                    value="{{ old('email', $doctor->email) }}" 
                                    placeholder="Enter email" 
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="department_id" class="form-label">Department</label>
                                <select name="department_id" id="department_id" class="form-select">
                                    <option value="">No Department</option>
                                    @foreach($departments as $department)
                                        <option value="{{ $department->id }}" {{ old('department_id', $doctor->department_id) == $department->id ? 'selected' : '' }}>
                                            {{ $department->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Doctor</button>
                            <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
