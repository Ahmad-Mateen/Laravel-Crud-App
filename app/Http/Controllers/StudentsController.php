<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Students::all();
        return view('students.list', compact('students'));
    }

    public function add()
    {
        return view('students.add');
    }

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string',
        ]);

        Students::create($validatedData);

        return redirect()->route('students.list')->with('success', 'Student added successfully!');
    }

    public function edit($id)
    {
        $student = Students::find($id);
        return view('students.edit', get_defined_vars());
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email'],
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string',
        ]);

        $student = Students::find($id);
        if ($student) {
            $student->update($validatedData);

            return redirect()->route('students.list')->with('success', 'Student updated successfully!');
        }
    }

    public function delete($id)
    {
        $student = Students::find($id);
        $student->delete();

        return redirect()->route('students.list')->with('success', 'Student deleted successfully!');
    }
}
