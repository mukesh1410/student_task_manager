@extends('app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Student Edit</div>
            <div class="card-body">
                <form action="/students/{{$student->id}}/update" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Name:</label>
                        <input type="text" name="name" value="{{$student->name}}" class="form-control" required>
                        @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Email:</label>
                        <input type="email" name="email" value="{{$student->email}}" class="form-control" required>
                        @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Class:</label>
                        <input type="text" name="class" value="{{$student->class}}" class="form-control" required>
                        @error('class') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                    <button type="submit" class="btn btn-warning">Update Student</button>
                    <a href="/students" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
