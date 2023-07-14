@extends('layouts.base')
@section('main-content')
    <div class="container">

        <form action="{{route('journal.update',['jid'=>$journal->jid])}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3 col">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{$journal->title}}" required>
            </div>

            <div class="mb-3 col">
                <label for="editor" class="form-label">Editor</label>
                <input type="text" id="editor" name="editor" class="form-control" value="{{$journal->editor}}" required>
            </div>

            <div class="mb-3 col">
                <label for="issn" class="form-label">ISSN</label>
                <input type="text" id="issn" name="issn" class="form-control" value="{{$journal->issn}}" required>
            </div>

            <div class="mb-3 col">
                <label for="publicationDate" class="form-label">Publication Date</label>
                <input type="date" id="publicationDate" name="publicationDate" class="form-control" value="{{$journal->publicationDate}}" required>
            </div>
            <button class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
