
@extends('layouts.main')

@section('container')
<article>
    <h2>judul</h2>
    <p>By. Andry Septian Syahputra Tumaruk in programming</p>
    {!! $post->content !!}

    <a href="/posts">kembali</a>
</article>
    
    
@endsection