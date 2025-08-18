@extends('layouts.master')

@section('content')
<div class="bootstrap-scope">
    <div class="container-fluid">
        <div class="row me-5">
            <!-- Empty column for sidebar width -->
            <div class="col-md-2"></div>

            <!-- Main content column -->
            <div class="col-md-10 py-4">
                <h2 class="mb-4">Update Employee</h2>
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route('employees.update', $employee->id) }}" method="POST">
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
                                        value="{{ old('name', $employee->name) }}" 
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
                                        value="{{ old('age', $employee->age) }}" 
                                        placeholder="Enter age" 
                                        required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select name="gender" id="gender" class="form-select" required>
                                        <option value="" disabled>Select Gender</option>
                                        <option value="Male" {{ old('gender', $employee->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                                        <opti
