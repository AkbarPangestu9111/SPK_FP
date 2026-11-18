
@extends('layouts.app')

@section('title', 'Beranda - SPK Smartphone')

@section('content')

<!-- HERO SECTION -->
<section class="relative overflow-hidden bg-white">
    <div class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-20 md:grid-cols-2 md:py-28">

        <!-- Hero Text -->
        <div>
            <span class="mb-6 inline-flex rounded-full bg-blue-50 px-4 py-2 text-sm font-semibold text-blue-700">
                SMARTPHONE RECOMMENDATION SYSTEM
            </span>

            <h1 class="mb-6 text-4xl font-extrabold leading-tight tracking-tight text-slate-900 md:text-5xl">
                Temukan Smartphone
                <span class="text-blue-600">
                    Terbaik untuk Kebutuhanmu
                </span>
            </h1>

            <p class="mb-8 max-w-xl text-lg leading-relaxed text-slate-600">
                Bingung memilih smartphone yang sesuai?
                Dapatkan rekomendasi berdasarkan kebutuhan,
                spesifikasi, dan anggaran melalui sistem
                pendukung keputusan dengan metode AHP dan SAW.
            </p>

            <div class="flex flex-wrap gap-4">
                <a href="/login"
                   class="rounded-xl bg-blue-600 px-7 py-3.5 font-semibold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700">
                    Mulai Rekomendasi
                    <span class="ml-2">→</span>
                </a>

                <a href="#cara-kerja"
                   class="rounded-xl border border-slate-300 px-7 py-3.5 font-semibold text-slate-700 transition hover:bg-slate-50">
                    Pelajari Sistem
                </a>
            </div>

            <!-- Method Information -->
            <div class="mt-12 flex gap-10">
                <div>
                    <h3 class="text-2xl font-extrabold text-slate-900">
                        AHP
                    </h3>
                    <p class="mt-1 text-sm text-slate-500">
                        Pembobotan kriteria
                    </p>
                </div>

                <div class="border-l border-slate-200 pl-10">
                    <h3 class="text-2xl font-extrabold text-slate-900">
                        SAW
                    </h3>
                    <p class="mt-1 text-sm text-slate-500">
                        Pemeringkatan smartphone
                    </p>
                </div>
            </div>
        </div>

        <!-- Hero Illustration -->
        <div class="relative flex items-center justify-center rounded-3xl bg-blue-50 p-8 md:p-12">

            <div class="absolute right-8 top-8 h-24 w-24 rounded-full bg-blue-100"></div>
            <div class="absolute bottom-8 left-8 h-16 w-16 rounded-full bg-indigo-100"></div>

            <div class="relative w-full max-w-sm rounded-3xl border border-slate-100 bg-white p-6 shadow-2xl">

                <div class="mb-6 flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold text-slate-900">
                            Rekomendasi Terbaik
                        </p>
                        <p class="text-xs text-slate-500">
                            Hasil analisis smartphone
                        </p>
                    </div>

                    <span class="rounded-lg bg-green-50 px-3 py-1 text-xs font-semibold text-green-700">
                        TOP 5
                    </span>
                </div>

                <div class="mb-5 flex items-center gap-4 rounded-2xl bg-slate-50 p-4">
                    <div class="flex h-20 w-16 items-center justify-center rounded-xl bg-blue-100 text-3xl">
                        📱
                    </div>

                    <div class="flex-1">
                        <p class="font-bold text-slate-900">
                            Smartphone
                        </p>
                        <p class="mt-1 text-xs text-slate-500">
                            Rekomendasi Gaming
                        </p>
                        <p class="mt-2 text-sm font-bold text-blue-600">
                            Skor SAW: 0.95
                        </p>
                    </div>
                </div>

                <div class="space-y-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-slate-500">Performa</span>
                        <span class="font-semibold text-slate-800">Sangat Baik</span>
                    </div>

                    <div class="h-2 rounded-full bg-slate-100">
                        <div class="h-2 w-11/12 rounded-full bg-blue-600"></div>
                    </div>

                    <div class="flex justify-between text-sm">
                        <span class="text-slate-500">Kesesuaian kebutuhan</span>
                        <span class="font-semibold text-slate-800">95%</span>
                    </div>

                    <div class="h-2 rounded-full bg-slate-100">
                        <div class="h-2 w-11/12 rounded-full bg-indigo-500"></div>
                    </div>
                </div>

                <p class="mt-5 text-center text-xs text-slate-400">
                    Ilustrasi tampilan hasil rekomendasi
                </p>
            </div>
        </div>

    </div>
</section>


<!-- FEATURES SECTION -->
<section class="bg-slate-50 py-20">
    <div class="mx-auto max-w-7xl px-6">

        <div class="mb-14 text-center">
            <span class="text-sm font-semibold uppercase tracking-wider text-blue-600">
                Keunggulan Sistem
            </span>

            <h2 class="mt-3 text-3xl font-bold text-slate-900">
                Mengapa Menggunakan SPK Smartphone?
            </h2>

            <p class="mx-auto mt-4 max-w-2xl text-slate-500">
                Membantu menentukan smartphone yang sesuai
                melalui proses perhitungan berdasarkan berbagai kriteria.
            </p>
        </div>

        <div class="grid gap-7 md:grid-cols-3">

            <!-- Feature 1 -->
            <div class="rounded-2xl border border-slate-200 bg-white p-8 transition hover:-translate-y-1 hover:shadow-lg">
                <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-xl bg-blue-100 text-2xl">
                    🎯
                </div>

                <h3 class="mb-3 text-lg font-bold text-slate-900">
                    Sesuai Kebutuhan
                </h3>

                <p class="text-sm leading-relaxed text-slate-500">
                    Pilih profil kebutuhan seperti gaming,
                    fotografi, baterai awet, produktivitas,
                    dan penggunaan sehari-hari.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="rounded-2xl border border-slate-200 bg-white p-8 transition hover:-translate-y-1 hover:shadow-lg">
                <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-xl bg-indigo-100 text-2xl">
                    ⚖️
                </div>

                <h3 class="mb-3 text-lg font-bold text-slate-900">
                    Metode AHP
                </h3>

                <p class="text-sm leading-relaxed text-slate-500">
                    Menentukan bobot kepentingan setiap kriteria
                    menggunakan perbandingan berpasangan
                    dan pengujian konsistensi.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="rounded-2xl border border-slate-200 bg-white p-8 transition hover:-translate-y-1 hover:shadow-lg">
                <div class="mb-6 flex h-14 w-14 items-center justify-center rounded-xl bg-green-100 text-2xl">
                    📊
                </div>

                <h3 class="mb-3 text-lg font-bold text-slate-900">
                    Metode SAW
                </h3>

                <p class="text-sm leading-relaxed text-slate-500">
                    Menghitung nilai preferensi setiap smartphone
                    untuk menghasilkan urutan rekomendasi
                    berdasarkan bobot kriteria.
                </p>
            </div>

        </div>
    </div>
</section>


<!-- HOW IT WORKS SECTION -->
<section id="cara-kerja" class="bg-white py-20">
    <div class="mx-auto max-w-7xl px-6">

        <div class="mb-14 text-center">
            <span class="text-sm font-semibold uppercase tracking-wider text-blue-600">
                Proses Rekomendasi
            </span>

            <h2 class="mt-3 text-3xl font-bold text-slate-900">
                Bagaimana Sistem Ini Bekerja?
            </h2>

            <p class="mx-auto mt-4 max-w-2xl text-slate-500">
                Hanya dengan beberapa langkah, kamu dapat
                memperoleh rekomendasi smartphone yang sesuai.
            </p>
        </div>

        <div class="grid gap-8 md:grid-cols-3">

            <div class="text-center">
                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-600 text-2xl font-bold text-white">
                    01
                </div>

                <h3 class="mb-3 font-bold text-slate-900">
                    Pilih Kebutuhan
                </h3>

                <p class="text-sm leading-relaxed text-slate-500">
                    Tentukan brand, profil kebutuhan,
                    dan batas anggaran smartphone.
                </p>
            </div>

            <div class="text-center">
                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-600 text-2xl font-bold text-white">
                    02
                </div>

                <h3 class="mb-3 font-bold text-slate-900">
                    Proses Perhitungan
                </h3>

                <p class="text-sm leading-relaxed text-slate-500">
                    Sistem mengolah data menggunakan
                    bobot AHP dan perhitungan SAW.
                </p>
            </div>

            <div class="text-center">
                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-600 text-2xl font-bold text-white">
                    03
                </div>

                <h3 class="mb-3 font-bold text-slate-900">
                    Lihat Rekomendasi
                </h3>

                <p class="text-sm leading-relaxed text-slate-500">
                    Dapatkan hingga lima smartphone
                    dengan peringkat terbaik.
                </p>
            </div>

        </div>

        <div class="mt-14 text-center">
            <a href="/login"
                class="inline-flex items-center rounded-xl bg-blue-600 px-8 py-4 font-semibold text-white transition hover:bg-blue-700">
                Coba Rekomendasi Sekarang →
            </a>
        </div>

    </div>
</section>

@endsection