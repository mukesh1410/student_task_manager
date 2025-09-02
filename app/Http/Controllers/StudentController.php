<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller{ 

    public function index() {
        $students = Student::all();
        return view('index', compact('students'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'class' => 'required'
        ]);
        Student::create($request->all());
        return redirect('/students')->with('success', 'Student Added!');
    }

    public function edit($id) {
        $student = Student::find($id);
        return view('edit', compact('student'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'class' => 'required'
        ]);
        $student = Student::find($id);
        $student->update($request->all());
        return redirect('/students')->with('success', 'Student Updated!');
    }

    public function delete($id) {
        Student::find($id)->delete();
        return redirect('/students')->with('success', 'Student Deleted!');
    }
}