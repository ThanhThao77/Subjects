@extends('layouts.base')
@section('title')
    HomePage
@endsection
@section('main-content')
    <div class="row">
        @foreach($posts as $post)
        <div class="col mb-2">
            <div class="card" style="width: 18rem;">
                <img src="{{$post->img}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->summary}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection



