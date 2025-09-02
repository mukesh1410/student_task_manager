@extends('app')
@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h4>Student List</h4>
        <a href="/students/create" class="btn btn-primary">Create Student</a>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Class</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->class}}</td>
                    <td>
                        <a href="/students/{{$student->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/students/{{$student->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Delete');">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
