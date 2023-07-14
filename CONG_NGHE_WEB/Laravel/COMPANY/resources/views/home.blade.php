@extends('layouts.base')
@section('title')
    HomePage
@endsection
@section('main-content')
    <div class="container mx-auto">
        @if(session('success'))
            <div class="toast bg-success d-block mx-auto mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header ">
                    <strong class="me-auto">Department</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{session('success')}}
                </div>
            </div>
        @endif

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
        <div class="d-flex mt-3" style="justify-content: space-between">
            <h1 class="text-center">Departments List</h1>
            <a href="{{route('department.create')}}" class="btn btn-success d-flex align-items-center">Add New Department</a>
        </div>
        <table class="table table-striped mt-1">
            <thead>
            <!--        table row-->
            <tr class="border">
                <!--            table heading-->
                <th>#</th>
                <th>Name</th>
                <th>Location</th>
                <th>Employee</th>
                <th colspan="1" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody >
            <?php $index = 1; ?>
            @foreach ($departments as $department)
                <tr class="border">
                    <th>{{$index++}}</th>
                    <td>{{$department->name}}</td>
                    <td>{{$department->location}}</td>
                    <td>{{$department->employee->name}}</td>
                    <td class="d-flex gap-3 justify-content-center">
                        {{--                        <a href="" class="btn btn-info">Detail</a>--}}
                        <a href="{{route('department.edit',['department_id'=>$department->department_id])}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('department.delete',['department_id'=>$department->department_id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Do you want to delete')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>

@endsection





{{--@extends('layouts.base')--}}
{{--@section('title')--}}
{{--    HomePage--}}
{{--@endsection--}}
{{--@section('main-content')--}}
{{--    <div class="wrapper">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-20">--}}
{{--                    <div class="mt-5 mb-3 clearfix">--}}
{{--                        <h2 class="pull-left">Department List</h2>--}}
{{--                        <a href="{{route('department.create')}}"  class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Department</a>--}}
{{--                    </div>--}}

{{--                    <table class="table table-bordered table-striped mt-1">--}}
{{--                        <thead>--}}
{{--                        <tr colspan="1" class="text-center">--}}
{{--                            <th>#</th>--}}
{{--                            <th>Name</th>--}}
{{--                            <th>Location</th>--}}
{{--                            <th>Employee</th>--}}
{{--                            <th>Publication Date</th>--}}
{{--                            <th >Action</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        <?php $index = 1; ?>--}}
{{--                        @foreach ($departments as $department)--}}
{{--                            <tr class="border ">--}}
{{--                                <th>{{$index++}}</th>--}}
{{--                                <td>{{$department->name}}</td>--}}
{{--                                <td>{{$department->location}}</td>--}}
{{--                                <td>{{$department->employee->name}}</td>--}}
{{--                                <td>{{$journal->publicationDate}}</td>--}}
{{--                                <td class="d-flex gap-3 justify-content-center">--}}
{{--                                    <a href="{{route('department.edit',['department_id'=>$department->department_id])}}"--}}
{{--                                       class="btn btn-info"><span class="fa fa-eye"></span></a>--}}
{{--                                    <a href="{{route('department.edit',['department_id'=>$department->department_id])}}"--}}
{{--                                       class="btn btn-warning"><span class="fa fa-pencil"></span></a>--}}
{{--                                    <form action="{{route('department.delete',['department_id'=>$department->department_id])}}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        @method('DELETE')--}}
{{--                                        <button class="btn btn-danger" onclick="return confirm('Do you want to delete this?')"><span class="fa fa-trash"></span></button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}


