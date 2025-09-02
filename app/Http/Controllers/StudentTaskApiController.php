<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentTaskApiController extends Controller
{
    public function tasks($id)
    {
        $student = Student::find($id);

        if (!$student) {
            return response()->json(['error' => 'Student not found'], 404);
        }

        $tasks = $student->tasks()->select('title', 'status')->get();

        return response()->json([
            'student' => $student->name,
            'tasks' => $tasks
        ]);
    }
}
