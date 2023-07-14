@extends('layouts.base')
@section('main-content')
    <div class="container">

        <form action="{{route('employee.update',['id'=>$employee->id])}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3 col">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{$employee->name}}" required>
            </div>

            <div class="mb-3 col">
                <label for="address" class="form-label">Address</label>
                <input type="text" id="address" name="address" class="form-control" value="{{$employee->address}}" required>
            </div>

            <div class="mb-3 col">
                <label for="salary" class="form-label">Salary</label>
                <input type="text" id="salary" name="salary" class="form-control" value="{{$employee->salary}}" required>
            </div>

{{--            <div class="mb-3 col">--}}
{{--                <label for="publicationDate" class="form-label">Publication Date</label>--}}
{{--                <input type="date" id="publicationDate" name="publicationDate" class="form-control" value="{{$journal->publicationDate}}" required>--}}
{{--            </div>--}}
            <button class="btn btn-success">Submit</button>
            <a href="http://127.0.0.1:8000/" class="btn btn-secondary ml-2">Cancel</a>
        </form>
    </div>
@endsection
