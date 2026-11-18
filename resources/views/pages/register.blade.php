
@extends('layouts.app')

@section('title', 'Sign Up - SPK Smartphone')

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
                Buat Akun Baru
            </h1>

            <p class="mt-2 text-sm text-slate-500">
                Daftar untuk mulai menggunakan SPK Smartphone.
            </p>
        </div>

        {{-- Form Sign Up --}}
        <form action="#" method="POST" class="space-y-5">

            @csrf

            {{-- Nama Lengkap --}}
            <div>
                <label for="name" class="mb-2 block text-sm font-semibold text-slate-700">
                    Nama Lengkap
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Masukkan nama lengkap"
                    autocomplete="name"
                    required
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                >
            </div>

            {{-- Username --}}
            <div>
                <label for="username" class="mb-2 block text-sm font-semibold text-slate-700">
                    Username
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Buat username"
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

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Buat password"
                    autocomplete="new-password"
                    required
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                >
            </div>

            {{-- Konfirmasi Password --}}
            <div>
                <label for="password_confirmation" class="mb-2 block text-sm font-semibold text-slate-700">
                    Konfirmasi Password
                </label>

                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Masukkan ulang password"
                    autocomplete="new-password"
                    required
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                >
            </div>

            {{-- Button Sign Up --}}
            <button
                type="submit"
                class="w-full rounded-lg bg-blue-600 py-3 font-semibold text-white transition hover:bg-blue-700"
            >
                Sign Up
            </button>

        </form>

        {{-- Login --}}
        <p class="mt-6 text-center text-sm text-slate-500">
            Sudah punya akun?

            <a href="/login" class="font-semibold text-blue-600 hover:text-blue-700">
                Login
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
