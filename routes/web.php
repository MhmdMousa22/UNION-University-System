<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Auth::routes();

// Redirect '/' to 'home' or dashboard, only for logged-in users
Route::middleware('auth')->group(function () {

    // Home / Dashboard
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Profile
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');

    // Resources
    Route::resource('students', StudentController::class);
    Route::resource('doctors', DoctorController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('departments', DepartmentController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('admins', AdminController::class);
    Route::resource('users', UserController::class);

});
