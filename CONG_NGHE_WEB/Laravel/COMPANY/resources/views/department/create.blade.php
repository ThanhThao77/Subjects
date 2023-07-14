@extends('layouts.base')
@section('title')
    Create
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

        <form action="{{route('department.store')}}" method="post">
            @csrf
            <div class="mb-3 col">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="mb-3 col">
                <label for="location" class="form-label">Location</label>
                <input type="text" id="location" name="location" class="form-control" required>
            </div>

            <div class="mb-3 col">
                <label for="salary" class="form-label">Employee</label>
                <select name="e_id" id="e_id" class="form-select" required>
                    <option value="" selected disabled>None</option>
                    @foreach($employees as $employee)
                        <option value="{{$employee->e_id}}">{{$employee->name}}</option>
                    @endforeach
                </select>
                {{--                <input type="text" id="manager_id" name="manager_id" class="form-control" required>--}}
            </div>

            <button class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
