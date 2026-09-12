@extends('dashboard.layouts.main')

@push('styles')
{{-- Trix Editor CSS --}}
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
@endpush

@section('container')
<div class="container-fluid px-4 py-3">

    {{-- Breadcrumb & Header --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-1">
                    <li class="breadcrumb-item"><a href="/dashboard" class="text-decoration-none">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/dashboard/posts" class="text-decoration-none">My Posts</a></li>
                    <li class="breadcrumb-item active" aria-current="page">edit Post</li>
                </ol>
            </nav>
            <h1 class="h2 fw-semibold mb-0">edit Post </h1>
        </div>
        <a href="/dashboard/posts" class="btn btn-outline-secondary btn-sm px-3">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
    </div>

    {{-- Alert Validasi --}}
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        <strong>Terdapat kesalahan:</strong>
        <ul class="mb-0 mt-1">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    {{-- Form Card --}}
    <div class="row justify-content-center">
        <div class="col-lg-9 col-xl-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body px-4 px-md-5 py-4">

                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
                        @method('put')
                        @csrf

                        {{-- Title --}}
                        <div class="mb-4">
                            <label for="title" class="form-label fw-semibold">
                                <i class="bi bi-type-h1 me-1 text-primary"></i> Judul Post
                            </label>
                            <input type="text"
                                id="title"
                                name="title"
                                class="form-control form-control-lg @error('title') is-invalid @enderror"
                                placeholder="Masukkan judul post..."
                                value="{{ old('title', $post->title) }}"
                                autofocus>
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Slug (auto-generate) --}}
                        <div class="mb-4">
                            <label for="slug" class="form-label fw-semibold">
                                <i class="bi bi-link-45deg me-1 text-primary"></i> Slug
                            </label>
                            <div class="input-group">
                                <span class="input-group-text text-muted" style="font-size:.85rem;">/posts/</span>
                                <input type="text"
                                    id="slug"
                                    name="slug"
                                    class="form-control @error('slug') is-invalid @enderror"
                                    placeholder="judul-post-anda"
                                    value="{{ old('slug', $post->slug) }}"
                                    readonly>
                            </div>
                            <div class="form-text">Slug otomatis dibuat dari judul.</div>
                            @error('slug')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Category --}}
                        <div class="mb-4">
                            <label for="category_id" class="form-label fw-semibold">
                                <i class="bi bi-tag me-1 text-primary"></i> Kategori
                            </label>
                            <select id="category_id"
                                name="category_id"
                                class="form-select @error('category_id') is-invalid @enderror">
                                <option value="" disabled selected>-- Pilih Kategori --</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Excerpt --}}
                        <div class="mb-4">
                            <label for="excerpt" class="form-label fw-semibold">
                                <i class="bi bi-card-text me-1 text-primary"></i> Ringkasan
                            </label>
                            <textarea id="excerpt"
                                name="excerpt"
                                rows="3"
                                class="form-control @error('excerpt') is-invalid @enderror"
                                placeholder="Tulis ringkasan singkat post...">{{ old('excerpt', $post->excerpt) }}</textarea>
                            <div class="form-text">Ditampilkan sebagai preview di halaman daftar post.</div>
                            @error('excerpt')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Content (Trix Editor) --}}
                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                <i class="bi bi-file-earmark-richtext me-1 text-primary"></i> Isi Konten
                            </label>
                            {{-- Input hidden: nilai HTML dari Trix dikirim via name="content" --}}
                            <div class="{{ $errors->has('content') ? 'trix-is-invalid' : '' }}">
                                <input type="hidden" id="content" name="content" value="{{ old('content', $post->content) }}">
                                <trix-editor input="content"
                                    placeholder="Tulis isi konten post di sini...">
                                </trix-editor>
                            </div>
                            @error('content')
                            <div class="text-danger small mt-1">
                                <i class="bi bi-exclamation-circle me-1"></i>{{ $message }}
                            </div>
                            @enderror
                        </div>

                        {{-- Actions --}}
                        <div class="d-flex gap-2 pt-3 border-top">
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="bi bi-send me-1"></i> Publish Post
                            </button>
                            <a href="/dashboard/posts" class="btn btn-outline-secondary px-4">
                                Batal
                            </a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
{{-- Trix Editor JS --}}
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
<script>
    // Auto-generate slug dari title
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');

    titleInput.addEventListener('input', function() {
        slugInput.value = this.value
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');
    });
</script>
@endpush