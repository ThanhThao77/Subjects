@extends('layouts.base')
@section('title')
    HomePage
@endsection
@section('main-content')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-20">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Employees List</h2>
                        <a href="{{route('employee.create')}}"  class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Employee</a>
                    </div>

                    <table class="table table-bordered table-striped mt-1">
                        <thead>
                        <tr colspan="1" class="text-center">
                            <th>#</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Salary</th>
{{--                            <th>Publication Date</th>--}}
                            <th >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 1; ?>
                        @foreach ($employees as $employee)
                            <tr class="border ">
                                <th>{{$index++}}</th>
                                <td>{{$employee->name}}</td>
                                <td>{{$employee->address}}</td>
                                <td>{{$employee->salary}}</td>
{{--                                <td>{{$journal->publicationDate}}</td>--}}
                                <td class="d-flex gap-3 justify-content-center">
                                    <a href="{{route('employee.show', ['id' => $employee->id])}}" class="btn btn-info"><span class="fa fa-eye"></span></a>
                                    <a href="{{route('employee.edit', ['id' => $employee->id])}}" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                    <form action="{{route('employee.delete',['id'=>$employee->id])}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" onclick="return confirm('Do you want to delete this?')"><span class="fa fa-trash"></span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


