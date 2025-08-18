<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Department;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index() {
        $doctors = Doctor::with('department')->get();
        return view('doctors.index', compact('doctors'));
    }

    public function create() {
        $departments = Department::all();
        return view('doctors.create', compact('departments'));
    }

    public function store(Request $request) {
        Doctor::create($request->all());
        return redirect()->route('doctors.index');
    }

    public function edit(Doctor $doctor) {
        $departments = Department::all();
        return view('doctors.edit', compact('doctor','departments'));
    }

    public function update(Request $request, Doctor $doctor) {
        $doctor->update($request->all());
        return redirect()->route('doctors.index');
    }

    public function destroy(Doctor $doctor) {
        $doctor->delete();
        return redirect()->route('doctors.index');
    }

    public function __construct()
{
    $this->middleware('role:admin')->except(['index', 'show']);
    $this->middleware('role:admin,user')->only(['index', 'show']);
}

}
