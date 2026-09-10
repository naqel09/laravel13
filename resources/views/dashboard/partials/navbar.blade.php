{{-- ══════════════════════════════════
         HEADER
    ══════════════════════════════════ --}}
<header class="sticky-top bg-white border-bottom d-flex align-items-center gap-3 px-3 px-md-4"
    style="height:64px;box-shadow:0 1px 10px rgba(0,0,0,.06);z-index:1030">

    {{-- Toggle sidebar (mobile only) --}}
    <button class="btn btn-light border-0 rounded-3 p-2 d-lg-none"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#mobileSidebar"
        title="Buka Sidebar">
        <i class="bi bi-list fs-5 text-secondary"></i>
    </button>

    {{-- Page title --}}
    <h1 class="fw-bold mb-0 flex-grow-1 text-dark" style="font-size:17px">
        <i class="bi bi-grid-1x2-fill me-2" style="color:#dc2626"></i>Dashboard
    </h1>

    {{-- Search (hidden on xs) --}}
    <div class="position-relative d-none d-sm-block">
        <i class="bi bi-search position-absolute text-secondary"
            style="left:13px;top:50%;transform:translateY(-50%);font-size:14px;pointer-events:none"></i>
        <input type="search"
            id="dashboard-search"
            class="form-control border rounded-3 bg-light"
            placeholder="Cari post, kategori..."
            style="padding-left:40px;width:240px;font-size:13.5px;font-family:'Inter',sans-serif">
    </div>

    {{-- Action buttons --}}
    <div class="d-flex align-items-center gap-2">

        {{-- Notification --}}
        <a href="#"
            id="btn-notification"
            title="Notifikasi"
            class="btn btn-light border rounded-3 d-flex align-items-center justify-content-center position-relative"
            style="width:38px;height:38px">
            <i class="bi bi-bell text-secondary" style="font-size:17px"></i>
            <span class="position-absolute bg-danger border border-white rounded-circle"
                style="width:8px;height:8px;top:7px;right:7px"></span>
        </a>

        {{-- View website --}}
        <a href="/"
            id="btn-view-site"
            title="Lihat Website"
            target="_blank"
            class="btn btn-light border rounded-3 d-flex align-items-center justify-content-center"
            style="width:38px;height:38px">
            <i class="bi bi-box-arrow-up-right text-secondary" style="font-size:17px"></i>
        </a>

        {{-- Logout --}}
        <form action="/logout" method="POST" class="m-0">
            @csrf
            <button type="submit"
                id="btn-logout"
                class="btn d-flex align-items-center gap-2 fw-semibold rounded-3 px-3 py-2 text-white border-0"
                style="background:linear-gradient(135deg,#dc2626,#ef4444);font-size:13.5px;box-shadow:0 3px 12px rgba(220,38,38,.30)">
                <i class="bi bi-box-arrow-left"></i>
                <span class="d-none d-sm-inline">Logout</span>
            </button>
        </form>

    </div>
</header>
{{-- END HEADER --}}