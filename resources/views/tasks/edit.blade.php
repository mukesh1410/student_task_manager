@extends('app')

@section('content')
<div class="container">
  <h2>Edit Task</h2>
  <form method="POST" action="{{ route('tasks.update', $task->id) }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="student_id" class="form-label">Student</label>
      <select class="form-select" name="student_id" required>
        @foreach($students as $student)
        <option value="{{ $student->id }}" {{ $task->student_id == $student->id ? 'selected' : '' }}>
          {{ $student->name }}
        </option>
        @endforeach
      </select>
      @error('student_id')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input class="form-control" type="text" name="title" value="{{ old('title', $task->title) }}" required>
      @error('title')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description">{{ old('description', $task->description) }}</textarea>
    </div>

    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
      <select class="form-select" name="status" required>
        <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
        <option value="In Progress" {{ $task->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
        <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
      </select>
      @error('status')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <button type="submit" class="btn btn-warning">Update Task</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
  </form>
</div>
@endsection
