<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
     public function index()
    {
        $teachers = Teacher::latest()->get();
        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'status' => 'required',
        ]);

        Teacher::create([
            'employee_id' => 'EMP-' . rand(10000,99999),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'department' => $request->department,
            'specialization' => $request->specialization,
            'hire_date' => $request->hire_date,
            'status' => $request->status,
        ]);

        return redirect()->route('teachers.index');
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);

        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $teacher->update($request->all());

        return redirect()->route('teachers.index');
    }

    public function destroy($id)
    {
        Teacher::destroy($id);

        return back();
    }
}
