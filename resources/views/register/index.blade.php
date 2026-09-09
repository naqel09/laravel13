@extends('layouts.main')

@section('container')
<div class="min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="card border-0 shadow-lg rounded-4" style="width: 100%; max-width: 460px;">

        {{-- Header --}}
        <div class="card-header text-center border-0 rounded-top-4 py-4"
            style="background: linear-gradient(135deg, #6366f1, #8b5cf6);">
            <div class="bg-white bg-opacity-25 rounded-3 d-inline-flex p-3 mb-3">
                <svg width="28" height="28" fill="none" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <circle cx="12" cy="7" r="4"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <h4 class="text-white fw-bold mb-1">Create Account</h4>
            <p class="text-white-50 small mb-0">Join us today, it's free!</p>
        </div>

        {{-- Body --}}
        <div class="card-body px-4 py-4">
            <form method="POST" action="/register">
                @csrf

                {{-- Name --}}
                <div class="mb-3">
                    <label for="name" class="form-label fw-semibold small text-uppercase text-secondary">
                        Full Name
                    </label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0">
                            <svg width="16" height="16" fill="none" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"
                                    stroke="#9ca3af" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <circle cx="12" cy="7" r="4"
                                    stroke="#9ca3af" stroke-width="2" />
                            </svg>
                        </span>
                        <input id="name"
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            class="form-control bg-light border-start-0 ps-0"
                            placeholder="Your full name"
                            required
                            autocomplete="name">
                    </div>
                </div>

                {{-- Username --}}
                <div class="mb-3">
                    <label for="username" class="form-label fw-semibold small text-uppercase text-secondary">
                        Username
                    </label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0">
                            <i class="bi bi-at text-secondary"></i>
                        </span>
                        <input id="username"
                            type="text"
                            name="username"
                            value="{{ old('username') }}"
                            class="form-control bg-light border-start-0 ps-0"
                            placeholder="your_username"
                            required
                            autocomplete="username">
                    </div>
                </div>

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
                            value="{{ old('email') }}"
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
                            placeholder="Min. 8 characters"
                            required
                            autocomplete="new-password">
                    </div>
                </div>

                {{-- Confirm Password --}}
                <div class="mb-4">
                    <label for="password_confirmation" class="form-label fw-semibold small text-uppercase text-secondary">
                        Confirm Password
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
                        <input id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            class="form-control bg-light border-start-0 ps-0"
                            placeholder="Repeat your password"
                            required
                            autocomplete="new-password">
                    </div>
                </div>

                {{-- Submit --}}
                <button type="submit"
                    class="btn w-100 fw-semibold text-white py-2 rounded-3"
                    style="background: linear-gradient(135deg, #6366f1, #8b5cf6);">
                    <i class="bi bi-person-plus me-1"></i> Create Account
                </button>
            </form>

            <p class="text-center text-secondary small mt-4 mb-0">
                Already have an account?
                <a href="/login" class="fw-semibold text-decoration-none" style="color: #6366f1;">Sign In</a>
            </p>
        </div>

    </div>
</div>
@endsection