@extends('layouts.master')

@section('title', 'Profile')

@section('content')
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <!-- Profile Header -->
        <div class="col-12 text-center mb-4">
            <h1 class="fw-bold" style="color: #8320bdff;">User Profile</h1>
            <p class="text-muted">View and manage your account information</p>
        </div>

        <!-- Profile Info Card with Banner -->
        <div class="col-md-9 col-xl-6">
            <div class="card shadow-sm border-0 rounded-3 overflow-hidden">
                <!-- Banner Image -->
                <div class="position-relative" style="height: 150px; background-image: url('{{ asset('assets/img/curved-images/curved8.jpg') }}'); background-size: cover; background-position: center;">
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>
                    <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
                        <h4 class="fw-bold mb-0 text-white">Welcome, {{ $user->name }}!</h4>
                        <p class="mb-0 text-white">Your profile overview</p>
                    </div>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <h5 class="card-title mb-3 text-secondary">Personal Info</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Name:</strong> {{ $user->name }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                        <li class="list-group-item"><strong>Role:</strong> {{ $user->role }}</li>
                        <li class="list-group-item"><strong>Created At:</strong> {{ $user->created_at->format('Y-m-d H:i:s') }}</li>
                        <li class="list-group-item"><strong>Updated At:</strong> {{ $user->updated_at->format('Y-m-d H:i:s') }}</li>
                    </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
