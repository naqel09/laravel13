@extends('dashboard.layouts.main')

@section('container')
{{-- ══════════════════════════════════
         MAIN
    ══════════════════════════════════ --}}
<main class="flex-grow-1 p-3 p-md-4">

    {{-- Welcome Banner --}}
    <div class="rounded-4 p-4 p-md-5 mb-4 text-white"
        style="background:linear-gradient(135deg,#0f172a 0%,#1e293b 55%,#7f1d1d 120%)">
        <h2 class="fw-bold mb-1" style="font-size:24px">
            Halo, {{ auth()->user()->name }}! 👋
        </h2>
        <p class="mb-0" style="color:rgba(255,255,255,.72);font-size:14px">
            Selamat datang kembali di panel admin. Berikut ringkasan aktivitas blog kamu.
        </p>
    </div>

    {{-- Stat Cards --}}
    <div class="row g-3 g-md-4 mb-4">

        <div class="col-6 col-xl-3">
            <div class="card border-0 rounded-4 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3 p-4">
                    <div class="d-flex align-items-center justify-content-center rounded-3 flex-shrink-0"
                        style="width:52px;height:52px;background:#fef2f2">
                        <i class="bi bi-file-earmark-text-fill fs-4" style="color:#dc2626"></i>
                    </div>
                    <div>
                        <div class="fw-bold lh-1 mb-1" style="font-size:26px;color:#0f172a">24</div>
                        <div class="text-secondary" style="font-size:13px">Total Posts</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-xl-3">
            <div class="card border-0 rounded-4 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3 p-4">
                    <div class="d-flex align-items-center justify-content-center rounded-3 flex-shrink-0"
                        style="width:52px;height:52px;background:#eff6ff">
                        <i class="bi bi-eye-fill fs-4" style="color:#2563eb"></i>
                    </div>
                    <div>
                        <div class="fw-bold lh-1 mb-1" style="font-size:26px;color:#0f172a">1.2K</div>
                        <div class="text-secondary" style="font-size:13px">Total Views</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-xl-3">
            <div class="card border-0 rounded-4 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3 p-4">
                    <div class="d-flex align-items-center justify-content-center rounded-3 flex-shrink-0"
                        style="width:52px;height:52px;background:#f0fdf4">
                        <i class="bi bi-tags-fill fs-4" style="color:#16a34a"></i>
                    </div>
                    <div>
                        <div class="fw-bold lh-1 mb-1" style="font-size:26px;color:#0f172a">8</div>
                        <div class="text-secondary" style="font-size:13px">Categories</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6 col-xl-3">
            <div class="card border-0 rounded-4 shadow-sm h-100">
                <div class="card-body d-flex align-items-center gap-3 p-4">
                    <div class="d-flex align-items-center justify-content-center rounded-3 flex-shrink-0"
                        style="width:52px;height:52px;background:#faf5ff">
                        <i class="bi bi-people-fill fs-4" style="color:#7c3aed"></i>
                    </div>
                    <div>
                        <div class="fw-bold lh-1 mb-1" style="font-size:26px;color:#0f172a">16</div>
                        <div class="text-secondary" style="font-size:13px">Users</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- END Stat Cards --}}

    {{-- Recent Posts Table --}}
    <div class="card border-0 rounded-4 shadow-sm overflow-hidden">

        <div class="card-header bg-white d-flex align-items-center justify-content-between py-3 px-4 border-bottom">
            <h5 class="fw-bold mb-0" style="font-size:15px;color:#0f172a">
                <i class="bi bi-clock-history me-2" style="color:#dc2626"></i>Post Terbaru
            </h5>
            <a href="/posts"
                class="btn btn-sm fw-semibold rounded-3 px-3"
                style="background:#fef2f2;color:#dc2626;font-size:12.5px;border:none">
                Lihat Semua
            </a>
        </div>

        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0" style="font-size:13.5px">
                    <thead class="table-light">
                        <tr>
                            <th class="px-4 py-3 text-secondary text-uppercase fw-semibold"
                                style="font-size:12px;letter-spacing:.5px">#</th>
                            <th class="px-4 py-3 text-secondary text-uppercase fw-semibold"
                                style="font-size:12px;letter-spacing:.5px">Judul</th>
                            <th class="px-4 py-3 text-secondary text-uppercase fw-semibold d-none d-md-table-cell"
                                style="font-size:12px;letter-spacing:.5px">Kategori</th>
                            <th class="px-4 py-3 text-secondary text-uppercase fw-semibold d-none d-md-table-cell"
                                style="font-size:12px;letter-spacing:.5px">Tanggal</th>
                            <th class="px-4 py-3 text-secondary text-uppercase fw-semibold"
                                style="font-size:12px;letter-spacing:.5px">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-4 py-3 text-secondary">1</td>
                            <td class="px-4 py-3 fw-medium" style="color:#374151">Cara Belajar Laravel dari Nol</td>
                            <td class="px-4 py-3 text-secondary d-none d-md-table-cell">Tutorial</td>
                            <td class="px-4 py-3 text-secondary d-none d-md-table-cell">10 Sep 2026</td>
                            <td class="px-4 py-3">
                                <span class="badge rounded-pill fw-semibold px-3 py-2"
                                    style="background:#f0fdf4;color:#16a34a;font-size:12px">Published</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3 text-secondary">2</td>
                            <td class="px-4 py-3 fw-medium" style="color:#374151">Pengenalan Blade Template Engine</td>
                            <td class="px-4 py-3 text-secondary d-none d-md-table-cell">Laravel</td>
                            <td class="px-4 py-3 text-secondary d-none d-md-table-cell">9 Sep 2026</td>
                            <td class="px-4 py-3">
                                <span class="badge rounded-pill fw-semibold px-3 py-2"
                                    style="background:#f0fdf4;color:#16a34a;font-size:12px">Published</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3 text-secondary">3</td>
                            <td class="px-4 py-3 fw-medium" style="color:#374151">Tips Desain UI Modern 2026</td>
                            <td class="px-4 py-3 text-secondary d-none d-md-table-cell">Design</td>
                            <td class="px-4 py-3 text-secondary d-none d-md-table-cell">8 Sep 2026</td>
                            <td class="px-4 py-3">
                                <span class="badge rounded-pill fw-semibold px-3 py-2"
                                    style="background:#fff7ed;color:#ea580c;font-size:12px">Draft</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3 text-secondary">4</td>
                            <td class="px-4 py-3 fw-medium" style="color:#374151">Membangun REST API dengan Laravel</td>
                            <td class="px-4 py-3 text-secondary d-none d-md-table-cell">Backend</td>
                            <td class="px-4 py-3 text-secondary d-none d-md-table-cell">7 Sep 2026</td>
                            <td class="px-4 py-3">
                                <span class="badge rounded-pill fw-semibold px-3 py-2"
                                    style="background:#f0fdf4;color:#16a34a;font-size:12px">Published</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    {{-- END Table --}}

</main>
{{-- END MAIN --}}
@endsection