@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')

<body class="bg-slate-50 text-slate-800">

<div class="min-h-screen flex">


{{-- SIDEBAR --}}
<aside class="hidden w-64 shrink-0 border-r border-slate-200 bg-white lg:flex lg:flex-col">

    {{-- Logo --}}
    <div class="flex h-20 items-center gap-3 border-b border-slate-200 px-6">
        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-white">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 3v18m9-9H3" />
            </svg>
        </div>
        <div>
            <h1 class="text-base font-bold text-slate-800">SPK Smartphone</h1>
            <p class="text-xs text-slate-500">Admin Panel</p>
        </div>
    </div>

    {{-- Menu --}}
    <nav class="flex-1 space-y-1 px-4 py-6">

        <p class="mb-3 px-3 text-xs font-semibold uppercase tracking-wider text-slate-400">
            Menu Utama
        </p>

        {{-- Dashboard (Aktif) --}}
        <a href="/admin/dashboard"
            class="flex items-center gap-3 rounded-lg bg-blue-50 px-3 py-3 text-sm font-semibold text-blue-700">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 13h8V3H3v10zm10 8h8V11h-8v10zM3 21h8v-6H3v6zm10-12h8V3h-8v6z" />
            </svg>
            Dashboard
        </a>

        {{-- Manajemen Smartphone --}}
        <a href="/admin/smartphone"
            class="flex items-center gap-3 rounded-lg px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                viewBox="0 0 24 24">
                <rect x="6" y="2" width="12" height="20" rx="2" />
                <path stroke-linecap="round" d="M11 18h2" />
            </svg>
            Manajemen Smartphone
        </a>

        {{-- Manajemen Kriteria --}}
        <a href="/admin/kriteria"
            class="flex items-center gap-3 rounded-lg px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 8h6m-6 4h6" />
            </svg>
            Manajemen Kriteria
        </a>

        {{-- Profil & Bobot AHP --}}
        <a href="/admin/profil-ahp"
            class="flex items-center gap-3 rounded-lg px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Profil & Bobot AHP
        </a>

        {{-- Riwayat Rekomendasi --}}
        <a href="/admin/riwayat"
            class="flex items-center gap-3 rounded-lg px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Riwayat Rekomendasi
        </a>

        {{-- Feedback Pengguna --}}
        <a href="/admin/feedback"
            class="flex items-center gap-3 rounded-lg px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M7 8h10M7 12h6m-9 8l3-3h10a3 3 0 003-3V6a3 3 0 00-3-3H4a3 3 0 00-3 3v14z" />
            </svg>
            Feedback Pengguna
        </a>

        {{-- Manajemen Pengguna --}}
        <a href="/admin/pengguna"
            class="flex items-center gap-3 rounded-lg px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17 20h5v-2a3 3 0 00-5.196-2.04M17 20H7m10 0v-2c0-.728-.195-1.411-.536-2M7 20H2v-2a3 3 0 015.196-2.04M7 20v-2c0-.728.195-1.411.536-2m0 0a5.002 5.002 0 019.928 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            Manajemen Pengguna
        </a>

        {{-- Laporan --}}
        <a href="/admin/laporan"
            class="flex items-center gap-3 rounded-lg px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h7l5 5v11a2 2 0 01-2 2z" />
            </svg>
            Laporan
        </a>

        {{-- Pengaturan --}}
        <a href="/admin/pengaturan"
            class="flex items-center gap-3 rounded-lg px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 8a4 4 0 100 8 4 4 0 000-8zm8 4a8 8 0 01-.1 1.2l2 1.5-2 3.5-2.4-1a8 8 0 01-2 1.2l-.4 2.6h-4l-.4-2.6a8 8 0 01-2-1.2l-2.4 1-2-3.5 2-1.5A8 8 0 014 12l-2-1.5 2-3.5 2.4 1a8 8 0 012-1.2L8.8 4h4l.4 2.6a8 8 0 012 1.2l2.4-1 2 3.5-2 1.5A8 8 0 0120 12z" />
            </svg>
            Pengaturan
        </a>

    </nav>

    {{-- Logout --}}
    <div class="border-t border-slate-200 p-4">
        <a href="/logout"
            class="flex items-center gap-3 rounded-lg px-3 py-3 text-sm font-medium text-red-600 transition hover:bg-red-50">
            <span>&gt;]</span>
            Logout
        </a>
    </div>

</aside>




    <!-- MAIN CONTENT -->
    <main class="min-w-0 flex-1">

        <!-- TOPBAR -->
        <header class="h-20 bg-white border-b border-slate-200 flex items-center justify-between px-8">

            <div>
                <h2 class="text-xl font-bold text-slate-800">Dashboard</h2>
                <p class="text-sm text-slate-500">Ringkasan aktivitas sistem SPK Smartphone</p>
            </div>

            <div class="flex items-center gap-3">
                <div class="text-right">
                    <p class="text-sm font-semibold text-slate-800">Administrator</p>
                    <p class="text-xs text-slate-500">Admin</p>
                </div>

                <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-700 flex items-center justify-center font-bold">
                    A
                </div>
            </div>

        </header>


        <!-- DASHBOARD BODY -->
        <div class="p-8">

            <!-- Welcome -->
            <div class="mb-7">
                <h1 class="text-2xl font-bold text-slate-800">
                    Selamat Datang, Admin!
                </h1>
                <p class="text-slate-500 mt-1">
                    Berikut adalah ringkasan data dan aktivitas aplikasi saat ini.
                </p>
            </div>


            <!-- STATISTIC CARDS -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-5">

                <!-- Total Smartphone -->
                <a href="/admin/smartphone"
                   class="bg-white p-6 rounded-xl border border-slate-200 hover:border-blue-400 hover:shadow-md transition">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm text-slate-500 font-medium">Total Smartphone</p>
                            <h3 class="text-3xl font-bold text-slate-800 mt-3">30</h3>
                            <p class="text-xs text-slate-400 mt-2">Data alternatif tersedia</p>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-2xl">
                            ▣
                        </div>
                    </div>
                    <p class="text-sm text-blue-600 font-medium mt-5">Kelola data smartphone →</p>
                </a>


                <!-- Total Pengguna -->
                <a href="/admin/pengguna"
                   class="bg-white p-6 rounded-xl border border-slate-200 hover:border-blue-400 hover:shadow-md transition">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm text-slate-500 font-medium">Total Pengguna</p>
                            <h3 class="text-3xl font-bold text-slate-800 mt-3">125</h3>
                            <p class="text-xs text-slate-400 mt-2">Pengguna terdaftar</p>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-violet-50 text-violet-600 flex items-center justify-center text-2xl">
                            ♙
                        </div>
                    </div>
                    <p class="text-sm text-blue-600 font-medium mt-5">Lihat pengguna →</p>
                </a>


                <!-- Total Rekomendasi -->
                <a href="/admin/riwayat"
                   class="bg-white p-6 rounded-xl border border-slate-200 hover:border-blue-400 hover:shadow-md transition">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm text-slate-500 font-medium">Total Rekomendasi</p>
                            <h3 class="text-3xl font-bold text-slate-800 mt-3">248</h3>
                            <p class="text-xs text-slate-400 mt-2">Rekomendasi diproses</p>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-2xl">
                            ◷
                        </div>
                    </div>
                    <p class="text-sm text-blue-600 font-medium mt-5">Lihat riwayat →</p>
                </a>


                <!-- Total Kriteria -->
                <a href="/admin/kriteria"
                   class="bg-white p-6 rounded-xl border border-slate-200 hover:border-blue-400 hover:shadow-md transition">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm text-slate-500 font-medium">Total Kriteria</p>
                            <h3 class="text-3xl font-bold text-slate-800 mt-3">6</h3>
                            <p class="text-xs text-slate-400 mt-2">Kriteria utama sistem</p>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-2xl">
                            ◈
                        </div>
                    </div>
                    <p class="text-sm text-blue-600 font-medium mt-5">Kelola kriteria →</p>
                </a>


                <!-- Feedback Positif -->
                <a href="/admin/feedback"
                   class="bg-white p-6 rounded-xl border border-slate-200 hover:border-emerald-400 hover:shadow-md transition">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm text-slate-500 font-medium">Feedback Positif</p>
                            <h3 class="text-3xl font-bold text-slate-800 mt-3">85</h3>
                            <p class="text-xs text-emerald-600 mt-2">Hasil rekomendasi membantu</p>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-2xl">
                            ✓
                        </div>
                    </div>
                    <p class="text-sm text-blue-600 font-medium mt-5">Lihat feedback →</p>
                </a>


                <!-- Feedback Negatif -->
                <a href="/admin/feedback"
                   class="bg-white p-6 rounded-xl border border-slate-200 hover:border-red-400 hover:shadow-md transition">
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-sm text-slate-500 font-medium">Feedback Negatif</p>
                            <h3 class="text-3xl font-bold text-slate-800 mt-3">12</h3>
                            <p class="text-xs text-red-600 mt-2">Hasil rekomendasi tidak membantu</p>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-red-50 text-red-600 flex items-center justify-center text-2xl">
                            !
                        </div>
                    </div>
                    <p class="text-sm text-blue-600 font-medium mt-5">Lihat feedback →</p>
                </a>

            </div>


            <!-- ACTIVITY AND FEEDBACK -->
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mt-8">

                <!-- Latest Recommendation -->
                <section class="xl:col-span-2 bg-white rounded-xl border border-slate-200">

                    <div class="p-6 border-b border-slate-200 flex items-center justify-between">
                        <div>
                            <h3 class="font-bold text-slate-800">Aktivitas Rekomendasi Terbaru</h3>
                            <p class="text-sm text-slate-500 mt-1">Riwayat rekomendasi pengguna</p>
                        </div>

                        <a href="/admin/riwayat"
                           class="text-sm text-blue-600 font-semibold hover:text-blue-800">
                            Lihat Semua →
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left">
                            <thead class="bg-slate-50 text-slate-500">
                                <tr>
                                    <th class="px-6 py-4 font-semibold">Pengguna</th>
                                    <th class="px-6 py-4 font-semibold">Kebutuhan</th>
                                    <th class="px-6 py-4 font-semibold">Tanggal</th>
                                    <th class="px-6 py-4 font-semibold">Status</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-slate-100">

                                <tr>
                                    <td class="px-6 py-4 font-medium text-slate-700">Andi</td>
                                    <td class="px-6 py-4 text-slate-600">Gaming</td>
                                    <td class="px-6 py-4 text-slate-500">14 Nov 2026</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-emerald-50 text-emerald-700 px-3 py-1 rounded-full text-xs font-semibold">
                                            Selesai
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 font-medium text-slate-700">Budi</td>
                                    <td class="px-6 py-4 text-slate-600">Fotografi</td>
                                    <td class="px-6 py-4 text-slate-500">13 Nov 2026</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-emerald-50 text-emerald-700 px-3 py-1 rounded-full text-xs font-semibold">
                                            Selesai
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="px-6 py-4 font-medium text-slate-700">Citra</td>
                                    <td class="px-6 py-4 text-slate-600">Baterai Awet</td>
                                    <td class="px-6 py-4 text-slate-500">12 Nov 2026</td>
                                    <td class="px-6 py-4">
                                        <span class="bg-emerald-50 text-emerald-700 px-3 py-1 rounded-full text-xs font-semibold">
                                            Selesai
                                        </span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </section>


                <!-- Feedback Summary -->
                <section class="bg-white rounded-xl border border-slate-200 p-6">

                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="font-bold text-slate-800">Ringkasan Feedback</h3>
                            <p class="text-sm text-slate-500 mt-1">Tanggapan pengguna</p>
                        </div>

                        <a href="/admin/feedback"
                           class="text-sm text-blue-600 font-semibold">
                            Detail →
                        </a>
                    </div>

                    <div class="mt-8 flex justify-center">
                        <div class="w-40 h-40 rounded-full flex items-center justify-center"
                             style="background: conic-gradient(#10b981 0% 87.6%, #ef4444 87.6% 100%);">
                            <div class="w-28 h-28 rounded-full bg-white flex flex-col items-center justify-center">
                                <span class="text-2xl font-bold text-slate-800">97</span>
                                <span class="text-xs text-slate-500">Total feedback</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 space-y-4">

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
                                <span class="text-sm text-slate-600">Positif</span>
                            </div>
                            <span class="text-sm font-semibold text-slate-800">85 (87,6%)</span>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-red-500"></span>
                                <span class="text-sm text-slate-600">Negatif</span>
                            </div>
                            <span class="text-sm font-semibold text-slate-800">12 (12,4%)</span>
                        </div>

                    </div>

                    <a href="/admin/feedback"
                       class="block text-center mt-7 py-3 rounded-lg bg-blue-50 text-blue-700 font-semibold text-sm hover:bg-blue-100 transition">
                        Lihat Semua Feedback
                    </a>

                </section>

            </div>


            <!-- Latest Feedback -->
            <section class="bg-white rounded-xl border border-slate-200 mt-6">

                <div class="p-6 border-b border-slate-200 flex items-center justify-between">
                    <div>
                        <h3 class="font-bold text-slate-800">Feedback Pengguna Terbaru</h3>
                        <p class="text-sm text-slate-500 mt-1">Tanggapan terhadap hasil rekomendasi</p>
                    </div>

                    <a href="/admin/feedback"
                       class="text-sm text-blue-600 font-semibold hover:text-blue-800">
                        Lihat Semua →
                    </a>
                </div>

                <div class="divide-y divide-slate-100">

                    <div class="p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="font-semibold text-slate-800">Andi</span>
                                <span class="bg-emerald-50 text-emerald-700 px-2 py-1 rounded-full text-xs font-semibold">
                                    Positif
                                </span>
                            </div>
                            <p class="text-sm text-slate-500 mt-2">
                                Hasil rekomendasi cukup membantu saya menemukan smartphone gaming.
                            </p>
                        </div>
                        <span class="text-xs text-slate-400 whitespace-nowrap">14 Nov 2026</span>
                    </div>

                    <div class="p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                        <div>
                            <div class="flex items-center gap-2">
                                <span class="font-semibold text-slate-800">Budi</span>
                                <span class="bg-red-50 text-red-700 px-2 py-1 rounded-full text-xs font-semibold">
                                    Negatif
                                </span>
                            </div>
                            <p class="text-sm text-slate-500 mt-2">
                                Saya berharap ada lebih banyak pilihan smartphone dengan harga terjangkau.
                            </p>
                        </div>
                        <span class="text-xs text-slate-400 whitespace-nowrap">13 Nov 2026</span>
                    </div>

                </div>

            </section>

            <p class="text-xs text-slate-400 text-center mt-8">
                SPK Smartphone Recommendation System &copy; 2026
            </p>

        </div>
    </main>

</div>

@endsection