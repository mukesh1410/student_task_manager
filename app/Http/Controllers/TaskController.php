<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Student;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::with('student')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function create() {
        $students = Student::all();
        return view('tasks.create', compact('students'));
    }

    public function store(Request $request) {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'title' => 'required',
            'status' => 'required|in:Pending,In Progress,Completed',
        ]);

        Task::create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task Created Successfully!');
    }

    public function edit($id) {
        $task = Task::findOrFail($id);
        $students = Student::all();
        return view('tasks.edit', compact('task', 'students'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'title' => 'required',
            'status' => 'required|in:Pending,In Progress,Completed',
        ]);

        $task = Task::findOrFail($id);
        $task->update($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task Updated Successfully!');
    }

    public function destroy($id) {
        Task::findOrFail($id)->delete();
        return redirect()->route('tasks.index')->with('success', 'Task Deleted Successfully!');
    }
}
