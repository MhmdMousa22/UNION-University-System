<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Doctor;
use App\Models\Course;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        // Data available to both Admin and User
        $studentsCount    = Student::count();
        $doctorsCount     = Doctor::count();
        $coursesCount     = Course::count();
        $departmentsCount = Department::count();

        // For admin only: employees
        $employeesCount   = null;
        if ($user->role === 'admin') {
            $employeesCount = Employee::count();
        }

        return view('home', compact(
            'studentsCount',
            'doctorsCount',
            'coursesCount',
            'departmentsCount',
            'employeesCount',
            'user'
        ));
    }
}
