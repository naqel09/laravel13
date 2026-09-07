@extends('layouts.main')

@section('container')
<h1>{{$title}}</h1>

@if ($posts->count())
<div class="card mb-3">
    <img src="https://media.istockphoto.com/id/2161298305/id/foto/latar-belakang-teknologi-big-data.jpg?s=612x612&w=0&k=20&c=7AUUOSMladSqcksB36NHRjyQENdnSpPyEhRYKhYBTA4=" class="card-img-top" alt="...">
    <div class="card-body text-center">
        <h3 class="card-title">
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a>
        </h3>
        <p>
            <small class="text-muted">

                By. <a href="/authors/{{ $posts[0]->author->name }}">{{$posts[0]->author->name }}</a> in
                <a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
        <p class="card-text"><small class="text-body-secondary">{{ $posts[0]->excerpt }}</small></p>

        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">read more &raquo;</a>
    </div>
</div>
@else
<p class="text-center fs-4"> No Post Found</p>
@endif

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2 text-white" style="background-color:rgba(0, 0, 0, 0.7)">
                    <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
                </div>
                <img src="https://images.unsplash.com/photo-1638602612226-55fd638475c9?q=80&w=875&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p>
                        By. <small class="text-muted">
                            <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="/posts/{{ $post->slug }}" class="btn btn-primary">read more&raquo;</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- <article class="mb-5 border-bottom pb-4">
    <h2>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
    </h2>
    <p>By. <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    <p>{{ $post->excerpt }}</p>
    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">read more &raquo;</a>
</article> -->


@endsection