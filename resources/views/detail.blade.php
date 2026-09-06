
@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <p>By. {{ $post->author->name }} in {{ $post->category->name }}</p>
    {!! $post->content !!}

    <a href="/posts" class="d-block mt-3">kembali</a>
</article>
    
    
@endsection