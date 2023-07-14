@extends('layouts.base')
@section('main-content')
    <div class="container">

        <form action="{{route('journal.store')}}" method="post">
            @csrf
            <div class="mb-3 col">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>

            <div class="mb-3 col">
                <label for="editor" class="form-label">Editor</label>
                <input type="text" id="editor" name="editor" class="form-control" required>
            </div>

            <div class="mb-3 col">
                <label for="issn" class="form-label">ISSN</label>
                <input type="text" id="issn" name="issn" class="form-control" required>
            </div>

            <div class="mb-3 col">
                <label for="publicationDate" class="form-label">ISSN</label>
                <input type="date" id="publicationDate" name="publicationDate" class="form-control" required>
            </div>
            <button class="btn btn-success">Create</button>
        </form>
    </div>
@endsection

