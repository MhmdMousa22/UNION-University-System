@extends('layouts.master')

@section('content')
<div class="bootstrap-scope">
    <div class="container-fluid">
        <div class="row me-5">
            <!-- Empty column for sidebar width (adjust according to your sidebar) -->
            <div class="col-md-2"></div>

            <!-- Main content column -->
            <div class="col-md-10 py-4">
                <h2 class="mb-4">Update Student</h2>
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('students.update', $student->id) }}" method="POST">
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
                                value="{{ old('name', $student->name) }}" 
                                placeholder="Enter your name" 
                                required>
                        </div>
                        <div class="col-md-6">
                            <label for="age" class="form-label">Age</label>
                            <input 
                                type="number" 
                                name="age" 
                                id="age" 
                                class="form-control" 
                                value="{{ old('age', $student->age) }}" 
                                placeholder="Enter your Age" 
                                required>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" id="gender" class="form-select" required>
                                <option value="" disabled>Select Gender</option>
                                <option value="Male" {{ old('gender', $student->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ old('gender', $student->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="birthdate" class="form-label">Birthdate</label>
                            <input 
                                type="date" 
                                name="birthdate" 
                                id="birthdate" 
                                class="form-control" 
                                value="{{ old('birthdate', $student->birthdate) }}" 
                                required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input 
                            type="text" 
                            name="address" 
                            id="address" 
                            class="form-control" 
                            value="{{ old('address', $student->address) }}" 
                            placeholder="Enter your Address" 
                            required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            class="form-control" 
                            value="{{ old('email', $student->email) }}" 
                            placeholder="Enter your Email" 
                            required>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="doctor_id" class="form-label">Doctor</label>
                            <select name="doctor_id" id="doctor_id" class="form-select" required>
                                <option value="" disabled>Select Doctor</option>
                                @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}" {{ old('doctor_id', $student->doctor_id) == $doctor->id ? 'selected' : '' }}>
                                        {{ $doctor->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="course_id" class="form-label">Course</label>
                            <select name="course_id" id="course_id" class="form-select">
                                <option value="">No Course</option>
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}" {{ old('course_id', $student->course_id) == $course->id ? 'selected' : '' }}>
                                        {{ $course->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="Active" {{ old('status', $student->status) == 'Active' ? 'selected' : '' }}>Active</option>
                            <option value="Not Active" {{ old('status', $student->status) == 'Not Active' ? 'selected' : '' }}>Not Active</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update Student</button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
