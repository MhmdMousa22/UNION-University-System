<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create() {
        return view('courses.create');
    }

public function store(Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'cost' => 'required|numeric',
        'hours' => 'required|integer',
    ]);

    Course::create($data);

    return redirect()->route('courses.index');
}


    public function edit(Course $course) {
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course) {
        $course->update($request->all());
        return redirect()->route('courses.index');
    }

    public function destroy(Course $course) {
        $course->delete();
        return redirect()->route('courses.index');
    }

    public function __construct()
{
    $this->middleware('role:admin')->except(['index', 'show']);
    $this->middleware('role:admin,user')->only(['index', 'show']);
}

}
