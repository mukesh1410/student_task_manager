@extends('app')

@section('content')
<div class="container">
  <h2>Tasks List</h2>
  <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-2">Add Task</a>
  
  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif
  
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Student</th>
        <th>Title</th>
        <th>Description</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tasks as $task)
      <tr>
        <td>{{ $task->id }}</td>
        <td>{{ $task->student->name }}</td>
        <td>{{ $task->title }}</td>
        <td>{{ $task->description }}</td>
        <td>{{ $task->status }}</td>
        <td>
          <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">Edit</a>
          <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
