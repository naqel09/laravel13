
@extends('layouts.main')

@section('container')
<article>
    <h2>judul</h2>
    <h5>penulis</h5>
    {{$post->content}}

    <a href="/posts">kembali</a>
</article>
    
    
@endsection