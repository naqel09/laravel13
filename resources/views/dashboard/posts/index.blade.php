@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid px-4 py-3">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    {{-- Page Header --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
        <h1 class="h2 fw-semibold">My Posts</h1>
        <a href="/dashboard/posts/create" class="btn btn-primary btn-sm px-3">
            <i class="bi bi-plus-lg me-1"></i> New Post
        </a>
    </div>

    {{-- Table Card --}}
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" id="postsTable">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" class="ps-4" style="width:60px">#No</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col" class="text-center" style="width:180px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        
                        {{-- Ganti dengan @foreach dari controller --}}
                        <tr>
                            <td class="ps-4 text-muted">{{ $loop->iteration }}</td>
                            <td><span class="fw-medium">{{ $post->title }}</span></td>
                            <td><span class="badge bg-primary-subtle text-primary rounded-pill px-3">{{ $post->category->name }}</span></td>
                            <td class="text-center">
                                <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-sm btn-outline-info me-1" title="Detail"><i class="bi bi-eye"></i></a>
                                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-outline-warning me-1" title="Edit"><i class="bi bi-pencil"></i></a>
                                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-sm btn-outline-danger" title="Hapus" onclick="return confirm('apakah anda yakin??')"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
