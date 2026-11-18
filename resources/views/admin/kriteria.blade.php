@extends('layouts.admin')

@section('title', 'Manajemen Kriteria')

@section('content')
<div class="min-h-screen bg-slate-50">

    <div class="flex min-h-screen">

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

                <a href="/admin/dashboard"
                    class="flex items-center gap-3 rounded-lg px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 13h8V3H3v10zm10 8h8V11h-8v10zM3 21h8v-6H3v6zm10-12h8V3h-8v6z" />
                    </svg>
                    Dashboard
                </a>

                <a href="/admin/smartphone"
                    class="flex items-center gap-3 rounded-lg px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <rect x="6" y="2" width="12" height="20" rx="2" />
                        <path stroke-linecap="round" d="M11 18h2" />
                    </svg>
                    Manajemen Smartphone
                </a>

                <a href="/admin/kriteria"
                    class="flex items-center gap-3 rounded-lg bg-blue-50 px-3 py-3 text-sm font-semibold text-blue-700">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 8h6m-6 4h6" />
                    </svg>
                    Manajemen Kriteria
                </a>

                <a href="/admin/profil-ahp"
                    class="flex items-center gap-3 rounded-lg px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Profil & Bobot AHP
                </a>

                <a href="/admin/riwayat"
                    class="flex items-center gap-3 rounded-lg px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Riwayat Rekomendasi
                </a>

                <a href="/admin/feedback"
                    class="flex items-center gap-3 rounded-lg px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7 8h10M7 12h6m-9 8l3-3h10a3 3 0 003-3V6a3 3 0 00-3-3H4a3 3 0 00-3 3v14z" />
                    </svg>
                    Feedback Pengguna
                </a>

                <a href="/admin/pengguna"
                    class="flex items-center gap-3 rounded-lg px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17 20h5v-2a3 3 0 00-5.196-2.04M17 20H7m10 0v-2c0-.728-.195-1.411-.536-2M7 20H2v-2a3 3 0 015.196-2.04M7 20v-2c0-.728.195-1.411.536-2m0 0a5.002 5.002 0 019.928 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Manajemen Pengguna
                </a>

                <a href="/admin/laporan"
                    class="flex items-center gap-3 rounded-lg px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h7l5 5v11a2 2 0 01-2 2z" />
                    </svg>
                    Laporan
                </a>

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
             <div class="p-4 border-t border-slate-200">
            <a href="/logout" class="flex items-center gap-3 px-3 py-3 rounded-lg text-red-600 hover:bg-red-50">
                <span>>]</span>
                Logout
            </a>
        </div>
        </aside>

        {{-- MAIN CONTENT --}}
        <main class="min-w-0 flex-1">

            {{-- TOPBAR --}}
            <header class="flex h-20 items-center justify-between border-b border-slate-200 bg-white px-5 sm:px-8">
                <div>
                    <h2 class="text-lg font-bold text-slate-800">Manajemen Kriteria</h2>
                    <p class="text-xs text-slate-500">Pengelolaan kriteria perhitungan SPK</p>
                </div>

                <div class="flex items-center gap-3">
                    <div class="hidden text-right sm:block">
                        <p class="text-sm font-semibold text-slate-800">Administrator</p>
                        <p class="text-xs text-slate-500">Admin</p>
                    </div>
                    <div class="flex h-10 w-10 items-center justify-center rounded-full bg-blue-100 text-sm font-bold text-blue-700">
                        A
                    </div>
                </div>
            </header>

            <div class="p-5 sm:p-8">

                {{-- PAGE HEADER --}}
                <div class="mb-7 flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
                    <div>
                        <h1 class="text-2xl font-bold tracking-tight text-slate-800">
                            Data Kriteria
                        </h1>
                        <p class="mt-1 text-sm text-slate-500">
                            Kelola kriteria yang digunakan dalam proses perhitungan rekomendasi smartphone.
                        </p>
                    </div>

                    <button onclick="openAddModal()"
                        class="inline-flex items-center justify-center gap-2 rounded-lg bg-blue-600 px-5 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 5v14m-7-7h14" />
                        </svg>
                        Tambah Kriteria
                    </button>
                </div>

                {{-- STATISTICS --}}
                <div class="mb-7 grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-3">

                    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500">Total Kriteria</p>
                                <h3 id="totalCriteria" class="mt-2 text-2xl font-bold text-slate-800">6</h3>
                            </div>
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-50 text-blue-600">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 8h6m-6 4h6" />
                                </svg>
                            </div>
                        </div>
                        <p class="mt-3 text-xs text-slate-400">Jumlah kriteria yang terdaftar</p>
                    </div>

                    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500">Kriteria Benefit</p>
                                <h3 id="totalBenefit" class="mt-2 text-2xl font-bold text-slate-800">5</h3>
                            </div>
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5 15l4-4 4 4 6-7m0 0h-5m5 0v5" />
                                </svg>
                            </div>
                        </div>
                        <p class="mt-3 text-xs text-slate-400">Semakin besar nilai semakin baik</p>
                    </div>

                    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-slate-500">Kriteria Cost</p>
                                <h3 id="totalCost" class="mt-2 text-2xl font-bold text-slate-800">1</h3>
                            </div>
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-50 text-orange-600">
                                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="1.8"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 9l-4 4-4-4-6 7m0 0h5m-5 0v-5" />
                                </svg>
                            </div>
                        </div>
                        <p class="mt-3 text-xs text-slate-400">Semakin kecil nilai semakin baik</p>
                    </div>

                </div>

                {{-- INFORMATION --}}
                <div class="mb-6 flex gap-3 rounded-xl border border-blue-100 bg-blue-50 p-4">
                    <svg class="mt-0.5 h-5 w-5 shrink-0 text-blue-600" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" />
                        <path stroke-linecap="round" d="M12 11v5m0-8h.01" />
                    </svg>
                    <div>
                        <p class="text-sm font-semibold text-blue-800">Informasi Kriteria SPK</p>
                        <p class="mt-1 text-sm leading-relaxed text-blue-700">
                            Benefit merupakan kriteria yang semakin besar nilai semakin baik.
                            Cost merupakan kriteria yang semakin kecil nilai semakin baik.
                            Kriteria ini akan digunakan dalam perhitungan metode AHP dan SAW.
                        </p>
                    </div>
                </div>

                {{-- TABLE CARD --}}
                <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">

                    {{-- TABLE HEADER --}}
                    <div class="flex flex-col justify-between gap-4 border-b border-slate-200 p-5 md:flex-row md:items-center">
                        <div>
                            <h3 class="font-bold text-slate-800">Daftar Kriteria</h3>
                            <p class="mt-1 text-xs text-slate-500">Daftar kriteria penilaian smartphone</p>
                        </div>

                        <div class="flex flex-col gap-3 sm:flex-row">
                            <div class="relative">
                                <svg class="absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400"
                                    fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <circle cx="11" cy="11" r="7" />
                                    <path stroke-linecap="round" d="m20 20-4-4" />
                                </svg>
                                <input id="searchCriteria" type="text" placeholder="Cari kriteria..."
                                    class="w-full rounded-lg border border-slate-200 py-2.5 pl-9 pr-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100 sm:w-52">
                            </div>

                            <select id="filterType"
                                class="rounded-lg border border-slate-200 px-3 py-2.5 text-sm text-slate-600 outline-none focus:border-blue-500">
                                <option value="">Semua Atribut</option>
                                <option value="Benefit">Benefit</option>
                                <option value="Cost">Cost</option>
                            </select>
                        </div>
                    </div>

                    {{-- TABLE --}}
                    <div class="overflow-x-auto">
                        <table class="w-full min-w-[850px] text-left text-sm">
                            <thead class="bg-slate-50 text-xs uppercase tracking-wider text-slate-500">
                                <tr>
                                    <th class="px-6 py-4 font-semibold">Kode</th>
                                    <th class="px-6 py-4 font-semibold">Nama Kriteria</th>
                                    <th class="px-6 py-4 font-semibold">Atribut</th>
                                    <th class="px-6 py-4 font-semibold">Satuan</th>
                                    <th class="px-6 py-4 font-semibold">Deskripsi</th>
                                    <th class="px-6 py-4 text-center font-semibold">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="criteriaTable" class="divide-y divide-slate-100">

                                <tr data-name="RAM" data-type="Benefit">
                                    <td class="px-6 py-4 font-semibold text-slate-700">C1</td>
                                    <td class="px-6 py-4">
                                        <p class="font-semibold text-slate-800">RAM</p>
                                        <p class="mt-1 text-xs text-slate-400">Random Access Memory</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">Benefit</span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600">GB</td>
                                    <td class="px-6 py-4 text-slate-500">Kapasitas memori RAM</td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-center gap-2">
                                            <button onclick="editCriteria(this)" class="rounded-lg p-2 text-blue-600 hover:bg-blue-50" title="Edit">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 4l4 4M4 20l4-.8L19 8a2.1 2.1 0 00-3-3L5 16l-1 4z" />
                                                </svg>
                                            </button>
                                            <button onclick="deleteCriteria(this)" class="rounded-lg p-2 text-red-600 hover:bg-red-50" title="Hapus">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16m-10 4v6m4-6v6M5 7l1 14h12l1-14M9 7V4h6v3" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr data-name="Harga" data-type="Cost">
                                    <td class="px-6 py-4 font-semibold text-slate-700">C2</td>
                                    <td class="px-6 py-4">
                                        <p class="font-semibold text-slate-800">Harga</p>
                                        <p class="mt-1 text-xs text-slate-400">Harga smartphone</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="rounded-full bg-orange-50 px-3 py-1 text-xs font-semibold text-orange-700">Cost</span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600">Rupiah</td>
                                    <td class="px-6 py-4 text-slate-500">Harga jual smartphone</td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-center gap-2">
                                            <button onclick="editCriteria(this)" class="rounded-lg p-2 text-blue-600 hover:bg-blue-50" title="Edit">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 4l4 4M4 20l4-.8L19 8a2.1 2.1 0 00-3-3L5 16l-1 4z" />
                                                </svg>
                                            </button>
                                            <button onclick="deleteCriteria(this)" class="rounded-lg p-2 text-red-600 hover:bg-red-50" title="Hapus">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16m-10 4v6m4-6v6M5 7l1 14h12l1-14M9 7V4h6v3" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr data-name="Baterai" data-type="Benefit">
                                    <td class="px-6 py-4 font-semibold text-slate-700">C3</td>
                                    <td class="px-6 py-4">
                                        <p class="font-semibold text-slate-800">Baterai</p>
                                        <p class="mt-1 text-xs text-slate-400">Battery Capacity</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">Benefit</span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600">mAh</td>
                                    <td class="px-6 py-4 text-slate-500">Kapasitas baterai</td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-center gap-2">
                                            <button onclick="editCriteria(this)" class="rounded-lg p-2 text-blue-600 hover:bg-blue-50" title="Edit">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 4l4 4M4 20l4-.8L19 8a2.1 2.1 0 00-3-3L5 16l-1 4z" />
                                                </svg>
                                            </button>
                                            <button onclick="deleteCriteria(this)" class="rounded-lg p-2 text-red-600 hover:bg-red-50" title="Hapus">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16m-10 4v6m4-6v6M5 7l1 14h12l1-14M9 7V4h6v3" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr data-name="Kamera" data-type="Benefit">
                                    <td class="px-6 py-4 font-semibold text-slate-700">C4</td>
                                    <td class="px-6 py-4">
                                        <p class="font-semibold text-slate-800">Kamera</p>
                                        <p class="mt-1 text-xs text-slate-400">Camera Quality Score</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">Benefit</span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600">Skor 0–100</td>
                                    <td class="px-6 py-4 text-slate-500">Skor kualitas kamera</td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-center gap-2">
                                            <button onclick="editCriteria(this)" class="rounded-lg p-2 text-blue-600 hover:bg-blue-50" title="Edit">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 4l4 4M4 20l4-.8L19 8a2.1 2.1 0 00-3-3L5 16l-1 4z" />
                                                </svg>
                                            </button>
                                            <button onclick="deleteCriteria(this)" class="rounded-lg p-2 text-red-600 hover:bg-red-50" title="Hapus">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16m-10 4v6m4-6v6M5 7l1 14h12l1-14M9 7V4h6v3" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr data-name="Penyimpanan" data-type="Benefit">
                                    <td class="px-6 py-4 font-semibold text-slate-700">C5</td>
                                    <td class="px-6 py-4">
                                        <p class="font-semibold text-slate-800">Penyimpanan</p>
                                        <p class="mt-1 text-xs text-slate-400">Internal Storage</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">Benefit</span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600">GB</td>
                                    <td class="px-6 py-4 text-slate-500">Kapasitas penyimpanan internal</td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-center gap-2">
                                            <button onclick="editCriteria(this)" class="rounded-lg p-2 text-blue-600 hover:bg-blue-50" title="Edit">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 4l4 4M4 20l4-.8L19 8a2.1 2.1 0 00-3-3L5 16l-1 4z" />
                                                </svg>
                                            </button>
                                            <button onclick="deleteCriteria(this)" class="rounded-lg p-2 text-red-600 hover:bg-red-50" title="Hapus">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16m-10 4v6m4-6v6M5 7l1 14h12l1-14M9 7V4h6v3" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <tr data-name="Prosesor" data-type="Benefit">
                                    <td class="px-6 py-4 font-semibold text-slate-700">C6</td>
                                    <td class="px-6 py-4">
                                        <p class="font-semibold text-slate-800">Prosesor</p>
                                        <p class="mt-1 text-xs text-slate-400">Geekbench 6 Multi-Core</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">Benefit</span>
                                    </td>
                                    <td class="px-6 py-4 text-slate-600">Skor Geekbench</td>
                                    <td class="px-6 py-4 text-slate-500">Performa prosesor smartphone</td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-center gap-2">
                                            <button onclick="editCriteria(this)" class="rounded-lg p-2 text-blue-600 hover:bg-blue-50" title="Edit">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 4l4 4M4 20l4-.8L19 8a2.1 2.1 0 00-3-3L5 16l-1 4z" />
                                                </svg>
                                            </button>
                                            <button onclick="deleteCriteria(this)" class="rounded-lg p-2 text-red-600 hover:bg-red-50" title="Hapus">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16m-10 4v6m4-6v6M5 7l1 14h12l1-14M9 7V4h6v3" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="border-t border-slate-200 px-6 py-4">
                        <p id="tableInfo" class="text-xs text-slate-500">Menampilkan 6 kriteria</p>
                    </div>

                </div>
            </div>
        </main>
    </div>
</div>

{{-- MODAL TAMBAH / EDIT --}}
<div id="criteriaModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-slate-900/50 p-4">
    <div class="w-full max-w-lg rounded-2xl bg-white shadow-xl">

        <div class="flex items-center justify-between border-b border-slate-200 px-6 py-5">
            <div>
                <h3 id="modalTitle" class="text-lg font-bold text-slate-800">Tambah Kriteria</h3>
                <p class="mt-1 text-xs text-slate-500">Lengkapi informasi kriteria di bawah ini</p>
            </div>
            <button onclick="closeModal()" class="rounded-lg p-2 text-slate-400 hover:bg-slate-100 hover:text-slate-700">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" d="M6 6l12 12M18 6L6 18" />
                </svg>
            </button>
        </div>

        <form id="criteriaForm" class="space-y-4 p-6">
            <input type="hidden" id="editRowIndex">

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Kode Kriteria</label>
                <input id="criteriaCode" type="text" readonly
                    class="w-full rounded-lg border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-500 outline-none">
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Nama Kriteria</label>
                <input id="criteriaName" type="text" required placeholder="Contoh: RAM"
                    class="w-full rounded-lg border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Atribut Kriteria</label>
                <select id="criteriaType" required
                    class="w-full rounded-lg border border-slate-200 px-4 py-3 text-sm outline-none focus:border-blue-500">
                    <option value="Benefit">Benefit</option>
                    <option value="Cost">Cost</option>
                </select>
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Satuan</label>
                <input id="criteriaUnit" type="text" required placeholder="Contoh: GB"
                    class="w-full rounded-lg border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700">Deskripsi</label>
                <textarea id="criteriaDescription" rows="3" placeholder="Deskripsi kriteria..."
                    class="w-full rounded-lg border border-slate-200 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"></textarea>
            </div>

            <div class="flex justify-end gap-3 border-t border-slate-100 pt-5">
                <button type="button" onclick="closeModal()"
                    class="rounded-lg border border-slate-200 px-5 py-2.5 text-sm font-semibold text-slate-600 transition hover:bg-slate-50">
                    Batal
                </button>
                <button type="submit"
                    class="rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-blue-700">
                    Simpan Kriteria
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const modal = document.getElementById('criteriaModal');
    const table = document.getElementById('criteriaTable');

    function openAddModal() {
        document.getElementById('criteriaForm').reset();
        document.getElementById('modalTitle').textContent = 'Tambah Kriteria';
        document.getElementById('editRowIndex').value = '';
        document.getElementById('criteriaCode').value = generateCode();

        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    function generateCode() {
        const rows = table.querySelectorAll('tr');
        let maxNumber = 0;

        rows.forEach(row => {
            const code = row.cells[0]?.textContent.trim();
            const number = parseInt(code?.replace('C', ''));

            if (!isNaN(number)) {
                maxNumber = Math.max(maxNumber, number);
            }
        });

        return 'C' + (maxNumber + 1);
    }

    function editCriteria(button) {
        const row = button.closest('tr');
        const index = Array.from(table.children).indexOf(row);

        document.getElementById('modalTitle').textContent = 'Edit Kriteria';
        document.getElementById('editRowIndex').value = index;
        document.getElementById('criteriaCode').value = row.cells[0].textContent.trim();
        document.getElementById('criteriaName').value = row.dataset.name;
        document.getElementById('criteriaType').value = row.dataset.type;
        document.getElementById('criteriaUnit').value = row.cells[3].textContent.trim();
        document.getElementById('criteriaDescription').value = row.cells[4].textContent.trim();

        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    document.getElementById('criteriaForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const index = document.getElementById('editRowIndex').value;
        const code = document.getElementById('criteriaCode').value;
        const name = document.getElementById('criteriaName').value.trim();
        const type = document.getElementById('criteriaType').value;
        const unit = document.getElementById('criteriaUnit').value.trim();
        const description = document.getElementById('criteriaDescription').value.trim();

        if (!name || !unit) {
            alert('Nama kriteria dan satuan wajib diisi.');
            return;
        }

        const badgeClass = type === 'Benefit'
            ? 'bg-emerald-50 text-emerald-700'
            : 'bg-orange-50 text-orange-700';

        const rowHTML = `
            <td class="px-6 py-4 font-semibold text-slate-700">${escapeHTML(code)}</td>
            <td class="px-6 py-4">
                <p class="font-semibold text-slate-800">${escapeHTML(name)}</p>
                <p class="mt-1 text-xs text-slate-400">${escapeHTML(description)}</p>
            </td>
            <td class="px-6 py-4">
                <span class="rounded-full px-3 py-1 text-xs font-semibold ${badgeClass}">${type}</span>
            </td>
            <td class="px-6 py-4 text-slate-600">${escapeHTML(unit)}</td>
            <td class="px-6 py-4 text-slate-500">${escapeHTML(description)}</td>
            <td class="px-6 py-4">
                <div class="flex justify-center gap-2">
                    <button onclick="editCriteria(this)" class="rounded-lg p-2 text-blue-600 hover:bg-blue-50" title="Edit">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 4l4 4M4 20l4-.8L19 8a2.1 2.1 0 00-3-3L5 16l-1 4z" />
                        </svg>
                    </button>
                    <button onclick="deleteCriteria(this)" class="rounded-lg p-2 text-red-600 hover:bg-red-50" title="Hapus">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 7h16m-10 4v6m4-6v6M5 7l1 14h12l1-14M9 7V4h6v3" />
                        </svg>
                    </button>
                </div>
            </td>
        `;

        if (index !== '') {
            const row = table.children[Number(index)];
            if (!row) return;

            row.innerHTML = rowHTML;
            row.dataset.name = name;
            row.dataset.type = type;
        } else {
            const newRow = document.createElement('tr');
            newRow.dataset.name = name;
            newRow.dataset.type = type;
            newRow.innerHTML = rowHTML;
            table.appendChild(newRow);
        }

        closeModal();
        updateStatistics();
        filterCriteria();
    });

    function escapeHTML(value) {
        return String(value).replace(/[&<>"']/g, char => ({
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        })[char]);
    }

    function deleteCriteria(button) {
        if (!confirm('Apakah Anda yakin ingin menghapus kriteria ini?')) return;

        button.closest('tr').remove();
        updateStatistics();
        filterCriteria();
    }

    function updateStatistics() {
        const rows = Array.from(table.querySelectorAll('tr'));
        const benefit = rows.filter(row => row.dataset.type === 'Benefit').length;
        const cost = rows.filter(row => row.dataset.type === 'Cost').length;

        document.getElementById('totalCriteria').textContent = rows.length;
        document.getElementById('totalBenefit').textContent = benefit;
        document.getElementById('totalCost').textContent = cost;
    }

    function filterCriteria() {
        const keyword = document.getElementById('searchCriteria').value.toLowerCase();
        const type = document.getElementById('filterType').value;

        let visible = 0;

        Array.from(table.querySelectorAll('tr')).forEach(row => {
            const name = row.dataset.name.toLowerCase();
            const code = row.cells[0].textContent.toLowerCase();

            const matchKeyword = name.includes(keyword) || code.includes(keyword);
            const matchType = !type || row.dataset.type === type;

            const show = matchKeyword && matchType;
            row.style.display = show ? '' : 'none';

            if (show) visible++;
        });

        document.getElementById('tableInfo').textContent =
            `Menampilkan ${visible} dari ${table.querySelectorAll('tr').length} kriteria`;
    }

    document.getElementById('searchCriteria').addEventListener('input', filterCriteria);
    document.getElementById('filterType').addEventListener('change', filterCriteria);

    updateStatistics();
</script>
@endsection
