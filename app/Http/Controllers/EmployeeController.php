<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Admin;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::with('admin')->get();
        return view('employees.index', compact('employees'));
    }

    public function create() {
        $admins = Admin::all();
        return view('employees.create', compact('admins'));
    }

    public function store(Request $request) {
        Employee::create($request->all());
        return redirect()->route('employees.index');
    }

    public function edit(Employee $employee) {
        $admins = Admin::all();
        return view('employees.edit', compact('employee','admins'));
    }

    public function update(Request $request, Employee $employee) {
        $employee->update($request->all());
        return redirect()->route('employees.index');
    }

    public function destroy(Employee $employee) {
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
