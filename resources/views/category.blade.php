@extends('layouts.main')

@section('container')
<h1>post category: {{ $category }}</h1>
@foreach ($posts as $post)
<article>
    <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
    <p>By. {{$post->author->name }} in {{ $post->category->name }}</p>
</article>
@endforeach
<a href="/posts">kembali</a>


@endsection