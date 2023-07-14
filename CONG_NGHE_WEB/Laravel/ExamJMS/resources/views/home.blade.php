@extends('layouts.base')
@section('title')
    HomePage
@endsection
@section('main-content')
    <div class="container mx-auto">
        <div class="d-flex mt-3" style="justify-content: space-between">
            <h1 class="text-center">Journals List</h1>
            <a href="{{route('journal.create')}}" class="btn btn-success d-flex align-items-center">Create New Journal</a>
        </div>
        <table class="table table-striped mt-1">
            <thead>
            <!--        table row-->
            <tr class="border">
                <!--            table heading-->
                <th>#</th>
                <th>Title</th>
                <th>Editor</th>
                <th>ISSN</th>
                <th>Publication Date</th>
                <th colspan="1" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody >
            <?php $index = 1; ?>
            @foreach ($journals as $journal)
                <tr class="border">
                    <th>{{$index++}}</th>
                    <td>{{$journal->title}}</td>
                    <td>{{$journal->editor}}</td>
                    <td>{{$journal->issn}}</td>
                    <td>{{$journal->publicationDate}}</td>
                    <td class="d-flex gap-3 justify-content-center">
                        <a href="" class="btn btn-info">Detail</a>
                        <a href="{{route('journal.edit', ['jid' => $journal->jid])}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('journal.delete',['jid'=>$journal->jid])}}" method="post">
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

