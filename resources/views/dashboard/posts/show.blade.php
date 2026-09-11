@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4 py-3">

    {{-- Page Header --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/dashboard" class="text-decoration-none">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/dashboard/posts" class="text-decoration-none">My Posts</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
        </nav>
        <a href="/dashboard/posts" class="btn btn-outline-secondary btn-sm px-3">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
    </div>

    {{-- Post Detail Card --}}
    <div class="row justify-content-center">
        <div class="col-lg-9 col-xl-8">
            <div class="card border-0 shadow-sm overflow-hidden">

                {{-- Gambar Post --}}
                <div style="height:320px; overflow:hidden;">
                    <img src="https://images.unsplash.com/photo-1638602612226-55fd638475c9?q=80&w=900&auto=format&fit=crop"
                         alt="Cover {{ $post->title }}"
                         class="w-100 h-100"
                         style="object-fit:cover;">
                </div>

                <div class="card-body px-4 px-md-5 py-4">

                    {{-- Category Badge --}}
                    <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2 mb-3">
                        <i class="bi bi-tag me-1"></i>{{ $post->category->name }}
                    </span>

                    {{-- Title --}}
                    <h1 class="fw-bold fs-2 mb-3">{{ $post->title }}</h1>

                    {{-- Meta: Author & Date --}}
                    <div class="d-flex align-items-center gap-3 mb-4 pb-4 border-bottom">
                        <div class="d-flex align-items-center gap-2">
                            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center text-white"
                                 style="width:38px; height:38px; font-size:.9rem; font-weight:600;">
                                {{ strtoupper(substr($post->author->name, 0, 1)) }}
                            </div>
                            <div>
                                <div class="fw-semibold lh-1" style="font-size:.9rem;">{{ $post->author->name }}</div>
                                <small class="text-muted">@ {{ $post->author->username }}</small>
                            </div>
                        </div>
                        <div class="vr"></div>
                        <div class="text-muted" style="font-size:.875rem;">
                            <i class="bi bi-calendar3 me-1"></i>
                            {{ $post->created_at->diffForHumans() }}
                        </div>
                    </div>

                    {{-- Isi / Content --}}
                    <article class="post-content lh-lg" style="font-size:1.05rem; color:#374151;">
                        {!! $post->content !!}
                    </article>

                    {{-- Footer Actions --}}
                    <div class="d-flex gap-2 mt-5 pt-4 border-top">
                        <a href="/dashboard/posts" class="btn btn-outline-secondary px-4">
                            <i class="bi bi-arrow-left me-1"></i> Kembali
                        </a>
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning px-4">
                            <i class="bi bi-pencil me-1"></i> Edit Post
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
