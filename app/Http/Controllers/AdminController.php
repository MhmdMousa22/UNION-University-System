<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $admins = Admin::all();
        return view('admins.index', compact('admins'));
    }

    public function create() {
        return view('admins.create');
    }

    public function store(Request $request) {
        $request->merge(['password' => bcrypt($request->password)]);
        Admin::create($request->all());
        return redirect()->route('admins.index');
    }

    public function edit(Admin $admin) {
        return view('admins.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin) {
        if($request->password) {
            $request->merge(['password' => bcrypt($request->password)]);
        }
        $admin->update($request->all());
        return redirect()->route('admins.index');
    }

    public function destroy(Admin $admin) {
        $admin->delete();
        return redirect()->route('admins.index');
    }
}
