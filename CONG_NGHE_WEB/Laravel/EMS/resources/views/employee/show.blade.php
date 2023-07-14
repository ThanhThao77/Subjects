@extends('layouts.base')
@section('main-content')
    <div class="container">

        <form action="{{route('employee.show',['id'=>$employee->id])}}" method="get">
            @csrf
            @method('GET')
            <div class="mb-3 col">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{$employee->name}}" readonly>
            </div>

            <div class="mb-3 col">
                <label for="address" class="form-label">Address</label>
                <input type="text" id="address" name="address" class="form-control" value="{{$employee->address}}" readonly>
            </div>

            <div class="mb-3 col">
                <label for="salary" class="form-label">Salary</label>
                <input type="text" id="salary" name="salary" class="form-control" value="{{$employee->salary}}" readonly>
            </div>

            {{--            <div class="mb-3 col">--}}
            {{--                <label for="publicationDate" class="form-label">Publication Date</label>--}}
            {{--                <input type="date" id="publicationDate" name="publicationDate" class="form-control" value="{{$journal->publicationDate}}" readonly>--}}
            {{--            </div>--}}
{{--            <button class="btn btn-success">Back</button>--}}
            <a href="http://127.0.0.1:8000/" class="btn btn-success ml-2">Back</a>
        </form>
    </div>
@endsection

