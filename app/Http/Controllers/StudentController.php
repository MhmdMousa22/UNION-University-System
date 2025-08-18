<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Doctor;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::with('doctor','course')->get();
        return view('students.index', compact('students'));
    }

    public function create() {
        $doctors = Doctor::all();
        $courses = Course::all();
        return view('students.create', compact('doctors','courses'));
    }

    public function store(Request $request) {
        $student = Student::create($request->all());
        return redirect()->route('students.index');
    }

    public function edit(Student $student) {
        $doctors = Doctor::all();
        $courses = Course::all();
        return view('students.edit', compact('student','doctors','courses'));
    }

    public function update(Request $request, Student $student) {
        $student->update($request->all());
        return redirect()->route('students.index');
    }

    public function destroy(Student $student) {
        $student->delete();
        return redirect()->route('students.index');
    }

    public function __construct()
{
    $this->middleware('role:admin')->except(['index', 'show']);
    $this->middleware('role:admin,user')->only(['index', 'show']);
}

}
