@extends('layouts.base')
@section('title')
    Edit
@endsection
@section('main-content')
    <div class="container">
        @if(session('error'))
            <div class="toast bg-danger d-block mx-auto mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header ">
                    <strong class="me-auto">Department</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{session('error')}}
                </div>
            </div>
        @endif
        <a class="btn btn-primary" href="{{route('home')}}">Return Homepage</a>

        <form action="{{route('department.update',['department_id'=>$department->department_id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3 col">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{$department->name}}" required>
            </div>

            <div class="mb-3 col">
                <label for="location" class="form-label">Address</label>
                <input type="text" id="location" name=location class="form-control" value="{{$department->location}}" required>
            </div>

            <div class="mb-3 col">
                <label for="e_id" class="form-label">Manager</label>
                <select name="e_id" id="er_id" class="form-select" required>
                    @foreach($employees as $employee)
                        <option value="{{$employee->e_id}}" @if($employee->e_id==$department->e_id)  selected @endif>{{$employee->name}}</option>
                    @endforeach
                </select>
            </div>

            <button class="btn btn-success">Edit</button>
        </form>
    </div>
@endsection
