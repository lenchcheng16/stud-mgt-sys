<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->get();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        // not needed if you are using modal, but kept for fallback
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_code' => 'required|unique:courses',
            'course_name' => 'required',
            'duration_years' => 'required',
            'status' => 'required',
        ]);

        Course::create([
            'course_code' => $request->course_code,
            'course_name' => $request->course_name,
            'description' => $request->description,
            'duration_years' => $request->duration_years,
            'department' => $request->department,
            'status' => $request->status,
        ]);

        return redirect()->route('courses.index');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $request->validate([
            'course_code' => 'required|unique:courses,course_code,' . $id,
            'course_name' => 'required',
            'duration_years' => 'required',
            'status' => 'required',
        ]);

        $course->update([
            'course_code' => $request->course_code,
            'course_name' => $request->course_name,
            'description' => $request->description,
            'duration_years' => $request->duration_years,
            'department' => $request->department,
            'status' => $request->status,
        ]);

        return redirect()->route('courses.index');
    }

    public function destroy($id)
    {
        Course::destroy($id);
        return back();
    }
}
