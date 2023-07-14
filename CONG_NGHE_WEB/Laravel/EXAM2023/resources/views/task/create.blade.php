@extends('layouts.base')
@section('title')
    Create
@endsection
@section('main-content')
    <div class="container">
        @if(session('error'))
            <div class="toast bg-danger d-block mx-auto mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header ">
                    <strong class="me-auto">Task</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{session('error')}}
                </div>
            </div>
        @endif
        <a class="btn btn-primary" href="{{route('home')}}">Return Homepage</a>

        <form action="{{route('task.store')}}" method="post">
            @csrf
            <div class="mb-3 col">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <div class="mb-3 col">
                <label for="description" class="form-label">Description</label>
                <input type="text" id="description" name="description" class="form-control" required>
            </div>

            <div class="mb-3 col">
                <label for="salary" class="form-label">User</label>
                <select name="user_id" id="user_id" class="form-select" required>
                    <option value="" selected disabled>None</option>
                    @foreach($usertasks as $usertask)
                        <option value="{{$usertask->user_id}}">{{$usertask->name}}</option>
                    @endforeach
                </select>
                {{--                <input type="text" id="manager_id" name="manager_id" class="form-control" required>--}}
            </div>


            <button class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
