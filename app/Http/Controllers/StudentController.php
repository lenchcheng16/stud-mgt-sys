<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->get();
        return view('students.index', compact('students'));
    }
    public function create()
    {
        // not needed if you are using modal, but kept for fallback
        return view('students.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'course' => 'required',
            'year_level' => 'required',
            'status' => 'required',
        ]);

        Student::create([
            'student_id' => 'STU-' . rand(10000,99999),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'course' => $request->course,
            'year_level' => $request->year_level,
            'status' => $request->status,
        ]);

        return redirect()->route('students.index');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $student->update($request->all());

        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return back();
    }
}
