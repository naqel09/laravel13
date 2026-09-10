{{-- ════════════════════════════════════════
     SIDEBAR DESKTOP  (fixed, hidden on <lg)
════════════════════════════════════════ --}}
<aside class="d-none d-lg-flex flex-column position-fixed top-0 start-0 vh-100 overflow-auto"
       style="width:260px;background-color:#0f172a;z-index:1040">

    {{-- Brand --}}
    <a href="/dashboard"
       class="d-flex align-items-center gap-3 px-4 py-3 text-decoration-none border-bottom border-secondary">
        <div class="d-flex align-items-center justify-content-center rounded-3 flex-shrink-0"
             style="width:38px;height:38px;background:linear-gradient(135deg,#dc2626,#ef4444)">
            <i class="bi bi-layers-fill fs-5 text-white"></i>
        </div>
        <div>
            <div class="fw-bold text-white lh-1 mb-1" style="font-size:16px">Andry Blog</div>
            <div class="text-secondary" style="font-size:11px">Admin Panel</div>
        </div>
    </a>

    {{-- Navigation --}}
    <nav class="flex-grow-1 px-3 py-3">

        <p class="text-secondary text-uppercase fw-semibold mb-2 px-2"
           style="font-size:10px;letter-spacing:1px">Main Menu</p>

        <a href="/dashboard"
           class="d-flex align-items-center gap-3 rounded-3 px-3 py-2 mb-1 text-white fw-medium text-decoration-none"
           style="font-size:14px;background:linear-gradient(135deg,#dc2626,#ef4444)">
            <i class="bi bi-grid-1x2-fill" style="width:20px;text-align:center"></i>
            <span>Dashboard</span>
        </a>

        <a href="/posts"
           class="d-flex align-items-center gap-3 rounded-3 px-3 py-2 mb-1 text-secondary fw-medium text-decoration-none"
           style="font-size:14px">
            <i class="bi bi-file-earmark-richtext" style="width:20px;text-align:center"></i>
            <span>Posts</span>
        </a>

        <a href="/categories"
           class="d-flex align-items-center gap-3 rounded-3 px-3 py-2 mb-1 text-secondary fw-medium text-decoration-none"
           style="font-size:14px">
            <i class="bi bi-tags-fill" style="width:20px;text-align:center"></i>
            <span>Categories</span>
        </a>

        <p class="text-secondary text-uppercase fw-semibold mt-3 mb-2 px-2"
           style="font-size:10px;letter-spacing:1px">Pages</p>

        <a href="/"
           class="d-flex align-items-center gap-3 rounded-3 px-3 py-2 mb-1 text-secondary fw-medium text-decoration-none"
           style="font-size:14px">
            <i class="bi bi-house-fill" style="width:20px;text-align:center"></i>
            <span>Home</span>
        </a>

        <a href="/about"
           class="d-flex align-items-center gap-3 rounded-3 px-3 py-2 mb-1 text-secondary fw-medium text-decoration-none"
           style="font-size:14px">
            <i class="bi bi-info-circle-fill" style="width:20px;text-align:center"></i>
            <span>About</span>
        </a>

        <p class="text-secondary text-uppercase fw-semibold mt-3 mb-2 px-2"
           style="font-size:10px;letter-spacing:1px">Account</p>

        <a href="#"
           class="d-flex align-items-center gap-3 rounded-3 px-3 py-2 mb-1 text-secondary fw-medium text-decoration-none"
           style="font-size:14px">
            <i class="bi bi-person-fill" style="width:20px;text-align:center"></i>
            <span>Profile</span>
        </a>

        <a href="#"
           class="d-flex align-items-center gap-3 rounded-3 px-3 py-2 mb-1 text-secondary fw-medium text-decoration-none"
           style="font-size:14px">
            <i class="bi bi-gear-fill" style="width:20px;text-align:center"></i>
            <span>Settings</span>
        </a>

    </nav>

    {{-- User card --}}
    <div class="p-3 border-top border-secondary">
        <div class="d-flex align-items-center gap-3 rounded-3 p-2"
             style="background-color:#1e293b">
            <div class="d-flex align-items-center justify-content-center rounded-circle fw-bold text-white flex-shrink-0"
                 style="width:36px;height:36px;background:linear-gradient(135deg,#dc2626,#ef4444);font-size:14px">
                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
            </div>
            <div class="overflow-hidden">
                <div class="fw-semibold text-white text-truncate" style="font-size:13px">
                    {{ auth()->user()->name }}
                </div>
                <div class="text-secondary" style="font-size:11px">Administrator</div>
            </div>
        </div>
    </div>

</aside>
{{-- END SIDEBAR DESKTOP --}}


{{-- ════════════════════════════════════════
     SIDEBAR MOBILE  (Offcanvas Bootstrap)
════════════════════════════════════════ --}}
<div class="offcanvas offcanvas-start d-lg-none"
     tabindex="-1"
     id="mobileSidebar"
     style="width:260px;background-color:#0f172a">

    <div class="offcanvas-header border-bottom border-secondary px-4 py-3">
        <a href="/dashboard" class="d-flex align-items-center gap-3 text-decoration-none">
            <div class="d-flex align-items-center justify-content-center rounded-3 flex-shrink-0"
                 style="width:38px;height:38px;background:linear-gradient(135deg,#dc2626,#ef4444)">
                <i class="bi bi-layers-fill fs-5 text-white"></i>
            </div>
            <div>
                <div class="fw-bold text-white lh-1 mb-1" style="font-size:16px">Andry Blog</div>
                <div class="text-secondary" style="font-size:11px">Admin Panel</div>
            </div>
        </a>
        <button type="button"
                class="btn-close btn-close-white ms-auto"
                data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body d-flex flex-column p-0">

        <nav class="flex-grow-1 px-3 py-3">

            <p class="text-secondary text-uppercase fw-semibold mb-2 px-2"
               style="font-size:10px;letter-spacing:1px">Main Menu</p>

            <a href="/dashboard"
               class="d-flex align-items-center gap-3 rounded-3 px-3 py-2 mb-1 text-white fw-medium text-decoration-none"
               style="font-size:14px;background:linear-gradient(135deg,#dc2626,#ef4444)">
                <i class="bi bi-grid-1x2-fill" style="width:20px;text-align:center"></i>
                <span>Dashboard</span>
            </a>

            <a href="/posts"
               class="d-flex align-items-center gap-3 rounded-3 px-3 py-2 mb-1 text-secondary fw-medium text-decoration-none"
               style="font-size:14px">
                <i class="bi bi-file-earmark-richtext" style="width:20px;text-align:center"></i>
                <span>Posts</span>
            </a>

            <a href="/categories"
               class="d-flex align-items-center gap-3 rounded-3 px-3 py-2 mb-1 text-secondary fw-medium text-decoration-none"
               style="font-size:14px">
                <i class="bi bi-tags-fill" style="width:20px;text-align:center"></i>
                <span>Categories</span>
            </a>

            <p class="text-secondary text-uppercase fw-semibold mt-3 mb-2 px-2"
               style="font-size:10px;letter-spacing:1px">Pages</p>

            <a href="/"
               class="d-flex align-items-center gap-3 rounded-3 px-3 py-2 mb-1 text-secondary fw-medium text-decoration-none"
               style="font-size:14px">
                <i class="bi bi-house-fill" style="width:20px;text-align:center"></i>
                <span>Home</span>
            </a>

            <a href="/about"
               class="d-flex align-items-center gap-3 rounded-3 px-3 py-2 mb-1 text-secondary fw-medium text-decoration-none"
               style="font-size:14px">
                <i class="bi bi-info-circle-fill" style="width:20px;text-align:center"></i>
                <span>About</span>
            </a>

            <p class="text-secondary text-uppercase fw-semibold mt-3 mb-2 px-2"
               style="font-size:10px;letter-spacing:1px">Account</p>

            <a href="#"
               class="d-flex align-items-center gap-3 rounded-3 px-3 py-2 mb-1 text-secondary fw-medium text-decoration-none"
               style="font-size:14px">
                <i class="bi bi-person-fill" style="width:20px;text-align:center"></i>
                <span>Profile</span>
            </a>

            <a href="#"
               class="d-flex align-items-center gap-3 rounded-3 px-3 py-2 mb-1 text-secondary fw-medium text-decoration-none"
               style="font-size:14px">
                <i class="bi bi-gear-fill" style="width:20px;text-align:center"></i>
                <span>Settings</span>
            </a>

        </nav>

        {{-- User card mobile --}}
        <div class="p-3 border-top border-secondary">
            <div class="d-flex align-items-center gap-3 rounded-3 p-2"
                 style="background-color:#1e293b">
                <div class="d-flex align-items-center justify-content-center rounded-circle fw-bold text-white flex-shrink-0"
                     style="width:36px;height:36px;background:linear-gradient(135deg,#dc2626,#ef4444);font-size:14px">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
                <div class="overflow-hidden">
                    <div class="fw-semibold text-white text-truncate" style="font-size:13px">
                        {{ auth()->user()->name }}
                    </div>
                    <div class="text-secondary" style="font-size:11px">Administrator</div>
                </div>
            </div>
        </div>

    </div>
</div>
{{-- END SIDEBAR MOBILE --}}