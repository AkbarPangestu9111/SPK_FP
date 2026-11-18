@extends('layouts.admin')

@section('title', 'Manajemen Smartphone')

@section('content')

<div class="min-h-screen bg-slate-50 flex">


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

        {{-- Dashboard --}}
        <a href="/admin/dashboard"
            class="flex items-center gap-3 rounded-lg px-3 py-3 text-sm font-medium text-slate-600 transition hover:bg-slate-100">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8"
                viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 13h8V3H3v10zm10 8h8V11h-8v10zM3 21h8v-6H3v6zm10-12h8V3h-8v6z" />
            </svg>
            Dashboard
        </a>

        {{-- Manajemen Smartphone (Aktif) --}}
        <a href="/admin/smartphone"
            class="flex items-center gap-3 rounded-lg bg-blue-50 px-3 py-3 text-sm font-semibold text-blue-700">
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
                <h2 class="text-xl font-bold text-slate-800">Manajemen Smartphone</h2>
                <p class="text-sm text-slate-500">Kelola data alternatif smartphone</p>
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


        <!-- CONTENT -->
        <div class="p-8">

            <!-- PAGE TITLE -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-7">

                <div>
                    <h1 class="text-2xl font-bold text-slate-800">
                        Data Alternatif Smartphone
                    </h1>

                    <p class="text-sm text-slate-500 mt-1">
                        Kelola informasi dan spesifikasi smartphone untuk proses perhitungan SPK.
                    </p>
                </div>

                <button type="button"
                    onclick="openAddModal()"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg font-semibold text-sm transition">
                    + Tambah Smartphone
                </button>

            </div>


            <!-- STATISTICS -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-7">

                <div class="bg-white border border-slate-200 rounded-xl p-5">
                    <p class="text-sm text-slate-500">Total Smartphone</p>
                    <h3 class="text-2xl font-bold text-slate-800 mt-2">30</h3>
                    <p class="text-xs text-slate-400 mt-1">Seluruh data alternatif</p>
                </div>

                <div class="bg-white border border-slate-200 rounded-xl p-5">
                    <p class="text-sm text-slate-500">Total Brand</p>
                    <h3 class="text-2xl font-bold text-slate-800 mt-2">6</h3>
                    <p class="text-xs text-slate-400 mt-1">Brand smartphone tersedia</p>
                </div>

                <div class="bg-white border border-slate-200 rounded-xl p-5">
                    <p class="text-sm text-slate-500">Data Alternatif Aktif</p>
                    <h3 class="text-2xl font-bold text-emerald-600 mt-2">30</h3>
                    <p class="text-xs text-slate-400 mt-1">Digunakan dalam rekomendasi</p>
                </div>

            </div>


            <!-- TABLE CONTAINER -->
            <div class="bg-white border border-slate-200 rounded-xl">

                <!-- SEARCH AND FILTER -->
                <div class="p-6 border-b border-slate-200">

                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">

                        <div>
                            <h3 class="font-bold text-slate-800">Daftar Smartphone</h3>
                            <p class="text-sm text-slate-500 mt-1">
                                Informasi spesifikasi setiap alternatif smartphone.
                            </p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-3">

                            <input
                                type="text"
                                id="searchInput"
                                placeholder="Cari smartphone..."
                                onkeyup="filterTable()"
                                class="border border-slate-300 rounded-lg px-4 py-2.5 text-sm outline-none focus:ring-2 focus:ring-blue-500 w-full sm:w-56">

                            <select
                                id="brandFilter"
                                onchange="filterTable()"
                                class="border border-slate-300 rounded-lg px-4 py-2.5 text-sm outline-none focus:ring-2 focus:ring-blue-500">

                                <option value="">Semua Brand</option>
                                <option value="Samsung">Samsung</option>
                                <option value="Xiaomi">Xiaomi</option>
                                <option value="Apple">Apple</option>
                                <option value="OPPO">OPPO</option>
                                <option value="Vivo">Vivo</option>
                                <option value="Realme">Realme</option>

                            </select>

                        </div>

                    </div>

                </div>


                <!-- TABLE -->
                <div class="overflow-x-auto">

                    <table class="w-full text-sm text-left whitespace-nowrap" id="smartphoneTable">

                        <thead class="bg-slate-50 text-slate-500">
                            <tr>
                                <th class="px-5 py-4 font-semibold">No</th>
                                <th class="px-5 py-4 font-semibold">Smartphone</th>
                                <th class="px-5 py-4 font-semibold">Brand</th>
                                <th class="px-5 py-4 font-semibold">Harga</th>
                                <th class="px-5 py-4 font-semibold">RAM</th>
                                <th class="px-5 py-4 font-semibold">Baterai</th>
                                <th class="px-5 py-4 font-semibold">Kamera</th>
                                <th class="px-5 py-4 font-semibold">Penyimpanan</th>
                                <th class="px-5 py-4 font-semibold">Geekbench 6</th>
                                <th class="px-5 py-4 font-semibold text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-slate-100">

                            <tr data-brand="Xiaomi" data-name="POCO X6 Pro">
                                <td class="px-5 py-4 text-slate-500">1</td>
                                <td class="px-5 py-4 font-semibold text-slate-800">POCO X6 Pro</td>
                                <td class="px-5 py-4">Xiaomi</td>
                                <td class="px-5 py-4">Rp4.499.000</td>
                                <td class="px-5 py-4">12 GB</td>
                                <td class="px-5 py-4">5.000 mAh</td>
                                <td class="px-5 py-4">82</td>
                                <td class="px-5 py-4">512 GB</td>
                                <td class="px-5 py-4">4.500</td>
                                <td class="px-5 py-4">
                                    <div class="flex items-center justify-center gap-2">
                                        <button onclick="editData('POCO X6 Pro')" class="px-3 py-1.5 bg-blue-50 text-blue-700 rounded-md hover:bg-blue-100">Edit</button>
                                        <button onclick="deleteData('POCO X6 Pro')" class="px-3 py-1.5 bg-red-50 text-red-600 rounded-md hover:bg-red-100">Hapus</button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-brand="Samsung" data-name="Samsung Galaxy A55">
                                <td class="px-5 py-4 text-slate-500">2</td>
                                <td class="px-5 py-4 font-semibold text-slate-800">Galaxy A55</td>
                                <td class="px-5 py-4">Samsung</td>
                                <td class="px-5 py-4">Rp5.499.000</td>
                                <td class="px-5 py-4">8 GB</td>
                                <td class="px-5 py-4">5.000 mAh</td>
                                <td class="px-5 py-4">88</td>
                                <td class="px-5 py-4">256 GB</td>
                                <td class="px-5 py-4">3.400</td>
                                <td class="px-5 py-4">
                                    <div class="flex items-center justify-center gap-2">
                                        <button onclick="editData('Samsung Galaxy A55')" class="px-3 py-1.5 bg-blue-50 text-blue-700 rounded-md hover:bg-blue-100">Edit</button>
                                        <button onclick="deleteData('Samsung Galaxy A55')" class="px-3 py-1.5 bg-red-50 text-red-600 rounded-md hover:bg-red-100">Hapus</button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-brand="Apple" data-name="iPhone 13">
                                <td class="px-5 py-4 text-slate-500">3</td>
                                <td class="px-5 py-4 font-semibold text-slate-800">iPhone 13</td>
                                <td class="px-5 py-4">Apple</td>
                                <td class="px-5 py-4">Rp8.499.000</td>
                                <td class="px-5 py-4">4 GB</td>
                                <td class="px-5 py-4">3.240 mAh</td>
                                <td class="px-5 py-4">90</td>
                                <td class="px-5 py-4">128 GB</td>
                                <td class="px-5 py-4">3.200</td>
                                <td class="px-5 py-4">
                                    <div class="flex items-center justify-center gap-2">
                                        <button onclick="editData('iPhone 13')" class="px-3 py-1.5 bg-blue-50 text-blue-700 rounded-md hover:bg-blue-100">Edit</button>
                                        <button onclick="deleteData('iPhone 13')" class="px-3 py-1.5 bg-red-50 text-red-600 rounded-md hover:bg-red-100">Hapus</button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-brand="OPPO" data-name="OPPO Reno 12">
                                <td class="px-5 py-4 text-slate-500">4</td>
                                <td class="px-5 py-4 font-semibold text-slate-800">OPPO Reno 12</td>
                                <td class="px-5 py-4">OPPO</td>
                                <td class="px-5 py-4">Rp5.999.000</td>
                                <td class="px-5 py-4">12 GB</td>
                                <td class="px-5 py-4">5.000 mAh</td>
                                <td class="px-5 py-4">85</td>
                                <td class="px-5 py-4">256 GB</td>
                                <td class="px-5 py-4">2.900</td>
                                <td class="px-5 py-4">
                                    <div class="flex items-center justify-center gap-2">
                                        <button onclick="editData('OPPO Reno 12')" class="px-3 py-1.5 bg-blue-50 text-blue-700 rounded-md hover:bg-blue-100">Edit</button>
                                        <button onclick="deleteData('OPPO Reno 12')" class="px-3 py-1.5 bg-red-50 text-red-600 rounded-md hover:bg-red-100">Hapus</button>
                                    </div>
                                </td>
                            </tr>

                            <tr data-brand="Vivo" data-name="Vivo V30">
                                <td class="px-5 py-4 text-slate-500">5</td>
                                <td class="px-5 py-4 font-semibold text-slate-800">Vivo V30</td>
                                <td class="px-5 py-4">Vivo</td>
                                <td class="px-5 py-4">Rp4.999.000</td>
                                <td class="px-5 py-4">12 GB</td>
                                <td class="px-5 py-4">5.000 mAh</td>
                                <td class="px-5 py-4">91</td>
                                <td class="px-5 py-4">256 GB</td>
                                <td class="px-5 py-4">2.800</td>
                                <td class="px-5 py-4">
                                    <div class="flex items-center justify-center gap-2">
                                        <button onclick="editData('Vivo V30')" class="px-3 py-1.5 bg-blue-50 text-blue-700 rounded-md hover:bg-blue-100">Edit</button>
                                        <button onclick="deleteData('Vivo V30')" class="px-3 py-1.5 bg-red-50 text-red-600 rounded-md hover:bg-red-100">Hapus</button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>

                    </table>

                </div>

                <!-- TABLE FOOTER -->
                <div class="p-5 border-t border-slate-200 flex flex-col sm:flex-row justify-between gap-3 text-sm text-slate-500">
                    <p>Menampilkan 5 data contoh dari 30 smartphone.</p>
                    <div class="flex gap-2">
                        <button class="px-3 py-1.5 border border-slate-200 rounded-lg">Sebelumnya</button>
                        <button class="px-3 py-1.5 bg-blue-600 text-white rounded-lg">1</button>
                        <button class="px-3 py-1.5 border border-slate-200 rounded-lg">2</button>
                        <button class="px-3 py-1.5 border border-slate-200 rounded-lg">3</button>
                        <button class="px-3 py-1.5 border border-slate-200 rounded-lg">Selanjutnya</button>
                    </div>
                </div>

            </div>

        </div>

    </main>

</div>


<!-- MODAL TAMBAH SMARTPHONE -->
<div id="addModal" class="hidden fixed inset-0 z-50 bg-slate-900/50 flex items-center justify-center p-4">

    <div class="bg-white rounded-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto">

        <div class="p-6 border-b border-slate-200 flex justify-between items-center">
            <div>
                <h2 class="text-lg font-bold text-slate-800">Tambah Smartphone</h2>
                <p class="text-sm text-slate-500 mt-1">Masukkan spesifikasi smartphone baru.</p>
            </div>

            <button type="button" onclick="closeAddModal()" class="text-slate-400 hover:text-slate-700 text-2xl">
                &times;
            </button>
        </div>

        <form onsubmit="saveDemo(event)" class="p-6">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">

                <div class="sm:col-span-2">
                    <label class="block text-sm font-medium text-slate-700 mb-2">Nama Smartphone</label>
                    <input type="text" required placeholder="Contoh: POCO X6 Pro"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3 text-sm focus:ring-2 focus:ring-blue-500 outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Brand</label>
                    <select required class="w-full border border-slate-300 rounded-lg px-4 py-3 text-sm">
                        <option value="">Pilih Brand</option>
                        <option>Samsung</option>
                        <option>Xiaomi</option>
                        <option>Apple</option>
                        <option>OPPO</option>
                        <option>Vivo</option>
                        <option>Realme</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Harga (Rp)</label>
                    <input type="number" min="0" required placeholder="5000000"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3 text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">RAM (GB)</label>
                    <input type="number" min="1" required placeholder="8"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3 text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Baterai (mAh)</label>
                    <input type="number" min="1" required placeholder="5000"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3 text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Skor Kamera (0–100)</label>
                    <input type="number" min="0" max="100" required placeholder="85"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3 text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Penyimpanan (GB)</label>
                    <input type="number" min="1" required placeholder="256"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3 text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Geekbench 6 Multi-Core</label>
                    <input type="number" min="1" required placeholder="3500"
                        class="w-full border border-slate-300 rounded-lg px-4 py-3 text-sm">
                </div>

            </div>

            <div class="flex justify-end gap-3 mt-8">
                <button type="button" onclick="closeAddModal()"
                    class="px-5 py-2.5 rounded-lg border border-slate-300 text-slate-600 text-sm font-semibold">
                    Batal
                </button>

                <button type="submit"
                    class="px-5 py-2.5 rounded-lg bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold">
                    Simpan Smartphone
                </button>
            </div>

        </form>

    </div>

</div>

<script>

    function filterTable() {
        const search = document.getElementById('searchInput').value.toLowerCase();
        const brand = document.getElementById('brandFilter').value;
        const rows = document.querySelectorAll('#smartphoneTable tbody tr');

        rows.forEach(row => {
            const name = row.dataset.name.toLowerCase();
            const rowBrand = row.dataset.brand;

            const matchName = name.includes(search);
            const matchBrand = brand === '' || rowBrand === brand;

            row.style.display = matchName && matchBrand ? '' : 'none';
        });
    }

    function openAddModal() {
        document.getElementById('addModal').classList.remove('hidden');
    }

    function closeAddModal() {
        document.getElementById('addModal').classList.add('hidden');
    }

    function editData(name) {
        alert('Fitur edit ' + name + ' akan diimplementasikan pada tahap berikutnya.');
    }

    function deleteData(name) {
        if (confirm('Apakah Anda yakin ingin menghapus ' + name + '?')) {
            alert('Fitur hapus akan dihubungkan ke database pada tahap berikutnya.');
        }
    }

    function saveDemo(event) {
        event.preventDefault();
        alert('Form berhasil diuji. Penyimpanan database akan dibuat pada tahap backend.');
        closeAddModal();
        event.target.reset();
    }

</script>

@endsection