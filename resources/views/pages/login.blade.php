
@extends('layouts.app')

@section('title', 'Login - SPK Smartphone')

@section('content')

<section class="flex min-h-[75vh] items-center justify-center bg-slate-50 px-6 py-16">

    <div class="w-full max-w-md rounded-2xl border border-slate-200 bg-white p-8 shadow-lg">

        {{-- Logo --}}
        <div class="mb-6 flex justify-center">
            <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-blue-600">
                <span class="text-2xl font-bold text-white">S</span>
            </div>
        </div>

        {{-- Heading --}}
        <div class="mb-8 text-center">
            <h1 class="text-2xl font-bold text-slate-900">
                Selamat Datang!
            </h1>

            <p class="mt-2 text-sm text-slate-500">
                Silakan masuk ke akun SPK Smartphone Anda.
            </p>
        </div>

        {{-- Form Login --}}
        <form action="#" method="POST" class="space-y-5">

            @csrf

            {{-- Username --}}
            <div>
                <label for="username" class="mb-2 block text-sm font-semibold text-slate-700">
                    Username
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Masukkan username"
                    autocomplete="username"
                    required
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                >
            </div>

            
        {{-- Password --}}
        <div>
            <label for="password" class="mb-2 block text-sm font-semibold text-slate-700">
                Password
            </label>

            <div class="relative">
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    autocomplete="current-password"
                    required
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 pr-12 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                >

                <button
                    type="button"
                    onclick="togglePassword()"
                    class="absolute inset-y-0 right-0 flex items-center px-4 text-slate-400 transition hover:text-blue-600"
                    aria-label="Tampilkan password"
                >
                    <svg id="eye-icon" xmlns="http://www.w3.org/2000/svg"
                        width="20" height="20" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M2.062 12.348a1 1 0 0 1 0-.696
                            10.75 10.75 0 0 1 19.876 0
                            1 1 0 0 1 0 .696
                            10.75 10.75 0 0 1-19.876 0"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </button>
            </div>
        </div>

        <script>
            function togglePassword() {
                const passwordInput = document.getElementById('password');
                const eyeIcon = document.getElementById('eye-icon');

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';

                    eyeIcon.innerHTML = `
                        <path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/>
                        <path d="M10.73 5.08A10.43 10.43 0 0 1 12 5
                            c5 0 8.27 4.11 9.5 6.27
                            a1 1 0 0 1 0 .73
                            11.77 11.77 0 0 1-4.1 4.75"/>
                        <path d="M6.61 6.61A11.77 11.77 0 0 0 2.5 11.27
                            a1 1 0 0 0 0 .73
                            C3.73 14.16 7 18.27 12 18.27
                            c1.13 0 2.19-.2 3.15-.56"/>
                        <path d="m2 2 20 20"/>
                    `;
                } else {
                    passwordInput.type = 'password';

                    eyeIcon.innerHTML = `
                        <path d="M2.062 12.348a1 1 0 0 1 0-.696
                            10.75 10.75 0 0 1 19.876 0
                            1 1 0 0 1 0 .696
                            10.75 10.75 0 0 1-19.876 0"/>
                        <circle cx="12" cy="12" r="3"/>
                    `;
                }
            }
        </script>


            {{-- Button Login --}}
            <button
                type="submit"
                class="w-full rounded-lg bg-blue-600 py-3 font-semibold text-white transition hover:bg-blue-700"
            >
                Login
            </button>

        </form>

        {{-- Sign Up --}}
        <p class="mt-6 text-center text-sm text-slate-500">
            Belum punya akun?

            <a href="/register" class="font-semibold text-blue-600 hover:text-blue-700">
                Sign Up
            </a>
        </p>

        {{-- Back to Home --}}
        <div class="mt-6 border-t border-slate-100 pt-5 text-center">
            <a href="/" class="text-sm font-medium text-slate-500 transition hover:text-blue-600">
                ← Kembali ke Beranda
            </a>
        </div>

    </div>

</section>

@endsection
