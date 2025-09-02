@extends('app')

@section('content')
<div class="container">
  <h2>Dashboard</h2>
  
  <div class="mb-4">
    <h4>Task Status Summary</h4>
    <ul class="list-group list-group-horizontal">
      <li class="list-group-item">Pending: {{ $statusCounts['Pending'] }}</li>
      <li class="list-group-item">In Progress: {{ $statusCounts['In Progress'] }}</li>
      <li class="list-group-item">Completed: {{ $statusCounts['Completed'] }}</li>
    </ul>
  </div>

  <h4>Students with their Tasks</h4>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Tasks</th>
      </tr>
    </thead>
    <tbody>
      @foreach($students as $student)
      <tr>
        <td>{{ $student->name }}</td>
        <td>
          <ul>
            @foreach($student->tasks as $task)
              <li>{{ $task->title }} - <strong>{{ $task->status }}</strong></li>
            @endforeach
          </ul>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
