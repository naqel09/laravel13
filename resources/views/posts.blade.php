@extends('layouts.main')

@section('container')

@foreach ($posts as $post)

<article>
    <h2>
        <a href="">{{ $post['title'] }}</a>
    </h2>
    <!-- <h5>by: {{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>
</article> -->

@endforeach

@endsection