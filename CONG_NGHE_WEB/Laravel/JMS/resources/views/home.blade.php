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
                        <h2 class="pull-left">Journals List</h2>
                        <a href="{{route('journal.create')}}"  class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Journal</a>
                    </div>

                    <table class="table table-bordered table-striped mt-1">
                        <thead>
                        <tr colspan="1" class="text-center">
                            <th>#</th>
                            <th>Title</th>
                            <th>Editor</th>
                            <th>ISSN</th>
                            <th>Publication Date</th>
                            <th >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 1; ?>
                        @foreach ($journals as $journal)
                            <tr class="border ">
                                <th>{{$index++}}</th>
                                <td>{{$journal->title}}</td>
                                <td>{{$journal->editor}}</td>
                                <td>{{$journal->issn}}</td>
                                <td>{{$journal->publicationDate}}</td>
                                <td class="d-flex gap-3 justify-content-center">
                                    <a href="" class="btn btn-info"><span class="fa fa-eye"></span></a>
                                    <a href="{{route('journal.edit', ['jid' => $journal->jid])}}" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                    <form action="{{route('journal.delete',['jid'=>$journal->jid])}}" method="post">
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

