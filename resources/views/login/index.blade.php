@extends('layouts.main')

@section('container')
<div class="min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="card border-0 shadow-lg rounded-4" style="width: 100%; max-width: 420px;">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        {{-- Header --}}
        <div class="card-header text-center border-0 rounded-top-4 py-4"
            style="background: linear-gradient(135deg, #6366f1, #8b5cf6);">
            <div class="bg-white bg-opacity-25 rounded-3 d-inline-flex p-3 mb-3">
                <svg width="28" height="28" fill="none" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <h4 class="text-white fw-bold mb-1">Welcome Back</h4>
            <p class="text-white-50 small mb-0">Sign in to continue to your account</p>
        </div>

        {{-- Body --}}
        <div class="card-body px-4 py-4">
            <form method="POST" action="/login">
                @csrf

                {{-- Email --}}
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold small text-uppercase text-secondary">
                        Email Address
                    </label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0">
                            <svg width="16" height="16" fill="none" viewBox="0 0 24 24">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                                    stroke="#9ca3af" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <polyline points="22,6 12,13 2,6"
                                    stroke="#9ca3af" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <input id="email"
                            type="email"
                            name="email"
                            class="form-control bg-light border-start-0 ps-0"
                            placeholder="you@example.com"
                            required
                            autocomplete="email">
                    </div>
                </div>

                {{-- Password --}}
                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold small text-uppercase text-secondary">
                        Password
                    </label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0">
                            <svg width="15" height="16" fill="none" viewBox="0 0 24 24">
                                <rect x="3" y="11" width="18" height="11" rx="2"
                                    stroke="#9ca3af" stroke-width="2" />
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"
                                    stroke="#9ca3af" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </span>
                        <input id="password"
                            type="password"
                            name="password"
                            class="form-control bg-light border-start-0 ps-0"
                            placeholder="Enter your password"
                            required
                            autocomplete="current-password">
                    </div>
                </div>

                {{-- Remember & Forgot --}}
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check mb-0">
                        <input class="form-check-input" type="checkbox" id="remember" name="remember">
                        <label class="form-check-label small text-secondary" for="remember">
                            Remember me
                        </label>
                    </div>
                    <a href="#" class="small text-decoration-none" style="color: #6366f1;">
                        Forgot password?
                    </a>
                </div>

                {{-- Submit --}}
                <button type="submit"
                    class="btn w-100 fw-semibold text-white py-2 rounded-3"
                    style="background: linear-gradient(135deg, #6366f1, #8b5cf6);">
                    Sign In
                </button>
            </form>

            <p class="text-center text-secondary small mt-4 mb-0">
                Don't have an account?
                <a href="/register" class="fw-semibold text-decoration-none" style="color: #6366f1;">Create one</a>
            </p>
        </div>

    </div>
</div>
@endsection