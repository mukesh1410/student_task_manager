<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Task;

class DashboardController extends Controller
{
    public function index(){
        $students = Student::with('tasks')->get();

        $statusCounts = [
            'Pending' => Task::where('status', 'Pending')->count(),
            'In Progress' => Task::where('status', 'In Progress')->count(),
            'Completed' => Task::where('status', 'Completed')->count(),
        ];

        return view('dashboard.index', compact('students', 'statusCounts'));
    }
}
