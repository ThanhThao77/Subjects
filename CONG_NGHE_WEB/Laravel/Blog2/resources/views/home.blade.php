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
        <a href="{{route('post.create')}}" class="btn btn-success">Create</a>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($posts as $post)
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                             xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                             preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect>
                            <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                        </svg>
                        <div class="card-body">
                            <p class="card-text fw-bold">{{$post->title}}  </p>
                            <p class="card-text">{{$post->body}}  </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{route('post.edit',['id' => $post->id])}}" type="button" class="btn btn-sm btn-outline-secondary">Edit</a>

                                    <form action="{{route('post.delete',['id'=>$post->id])}}" method="post">
                                        @csrf
                                        <button class="btn btn-sm btn-outline-secondary"
                                        onclick="confirm('Ban co chac muon xoa?')"
                                        >Delete</button>
                                    </form>
                                </div>
                                <small class="text-body-secondary">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection



