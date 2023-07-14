@extends('layouts.base')
@section('main-content')
    <div class="container">
        @if(session('success'))
            <div class="toast bg-success d-block mx-auto mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header ">
                    <strong class="me-auto">Post</strong>
                    <small>11 mins ago</small>
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
                    <strong class="me-auto">Post</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{session('error')}}
                </div>
            </div>
        @endif

        <form action="{{route('post.update',['id'=>$post->id])}}" method="post">
            @csrf
            <div class="mb-3 col">
                <label for="title" class="form-label">Title</label>
                <input type="text" id="title" name="title" class="form-control" value="{{$post->title}}" required>
            </div>

            <div class="mb-3 col">
                <label for="body" class="form-label">Body</label>
                <textarea type="text" id="body" name="body" class="form-control" required>{{$post->body}}</textarea>
            </div>
            <button class="btn btn-success">Edit</button>
        </form>
    </div>
@endsection
