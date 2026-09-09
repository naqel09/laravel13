@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <p>By. <a href="/posts?author{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            <img src="https://images.unsplash.com/photo-1638602612226-55fd638475c9?q=80&w=875&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
            <article class="my-3 fs-5">
                {!! $post->content !!}
            </article>
            <a href="/posts" class="d-block mt-3">kembali</a>
        </div>
    </div>
</div>

@endsection