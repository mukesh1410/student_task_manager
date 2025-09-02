@extends('app')

@section('content')
<div class="container">
  <h2>Add Task</h2>
  <form method="POST" action="{{ route('tasks.store') }}">
    @csrf
    <div class="mb-3">
      <label for="student_id" class="form-label">Student</label>
      <select class="form-select" name="student_id" required>
        <option value="">-- Select Student --</option>
        @foreach($students as $student)
        <option value="{{ $student->id }}" {{ old('student_id') == $student->id ? 'selected' : '' }}>
          {{ $student->name }}
        </option>
        @endforeach
      </select>
      @error('student_id')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input class="form-control" type="text" name="title" value="{{ old('title') }}" required>
      @error('title')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description">{{ old('description') }}</textarea>
    </div>

    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
      <select class="form-select" name="status" required>
        <option value="Pending" {{ old('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
        <option value="In Progress" {{ old('status') == 'In Progress' ? 'selected' : '' }}>In Progress</option>
        <option value="Completed" {{ old('status') == 'Completed' ? 'selected' : '' }}>Completed</option>
      </select>
      @error('status')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <button type="submit" class="btn btn-success">Save Task</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back</a>
  </form>
</div>
@endsection
