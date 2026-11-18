
@extends('layouts.app')

@section('title', 'Rekomendasi Smartphone')

@section('content')

<section class="mx-auto max-w-7xl px-6 py-16">

    <div class="mb-10 max-w-2xl">
        <span class="text-sm font-semibold text-blue-600">
            SMARTPHONE RECOMMENDATION
        </span>

        <h1 class="mt-3 text-4xl font-bold tracking-tight text-slate-900">
            Temukan Smartphone yang Tepat untukmu
        </h1>

        <p class="mt-4 leading-relaxed text-slate-500">
            Tentukan kebutuhan dan anggaranmu. Sistem akan membantu
            menemukan smartphone terbaik menggunakan metode AHP-SAW.
        </p>
    </div>

    <div class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm">

        <h2 class="text-xl font-bold text-slate-900">
            Preferensi Smartphone
        </h2>

        <p class="mt-2 text-sm text-slate-500">
            Isi preferensi berikut untuk mendapatkan rekomendasi.
        </p>

        <div class="mt-8 grid gap-6 md:grid-cols-2">

            {{-- Pilih Brand --}}
            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">
                    Pilih Brand
                </label>

                <select class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none focus:border-blue-500">
                    <option value="">Semua Brand</option>
                    <option>Samsung</option>
                    <option>Xiaomi</option>
                    <option>Apple</option>
                    <option>OPPO</option>
                    <option>Vivo</option>
                    <option>Realme</option>
                </select>
            </div>

            {{-- Budget Maksimal --}}
            <div>
                <label class="mb-2 block text-sm font-semibold text-slate-700">
                    Budget Maksimal
                </label>

                <div class="relative">
                    <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-500">
                        Rp :
                    </span>

                    <input
                        type="text"
                        id="budget_max"
                        name="budget_max"
                        inputmode="numeric"
                        autocomplete="off"
                        oninput="this.value = this.value.replace(/\D/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, '.')"
                        class="w-full rounded-lg border border-slate-300 py-3 pl-12 pr-4 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                    >
                </div>
            </div>

        </div>

        {{-- Pilih Kebutuhan --}}
        <div class="mt-8">
            <label class="mb-4 block text-sm font-semibold text-slate-700">
                Pilih Kebutuhan
            </label>

            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ([
                    'Gaming',
                    'Fotografi',
                    'Produktivitas',
                    'Penggunaan Sehari-hari'
                ] as $need)

                    <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-slate-200 p-4 transition hover:border-blue-500 hover:bg-blue-50">

                        <input
                            type="radio"
                            name="need"
                            value="{{ $need }}"
                            class="h-4 w-4 accent-blue-600"
                        >

                        <span class="text-sm font-medium text-slate-700">
                            {{ $need }}
                        </span>

                    </label>

                @endforeach

            </div>
        </div>

        {{-- Custom Kriteria --}}
        <div class="mt-10 border-t border-slate-100 pt-8">

            <div class="flex flex-wrap items-center justify-between gap-3">
                <div>
                    <h3 class="text-lg font-bold text-slate-900">
                        Custom Kriteria
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Tambahkan kriteria sesuai preferensi pribadimu.
                    </p>
                </div>

                <span class="rounded-full bg-blue-50 px-3 py-1.5 text-xs font-semibold text-blue-600">
                    Maksimal 2 kriteria
                </span>
            </div>

            <div class="mt-6">

                <p class="mb-3 text-sm font-semibold text-slate-700">
                    Pilih Kriteria Tambahan
                </p>

                <div class="grid gap-3 sm:grid-cols-2">

                    @foreach ([
                        'RAM',
                        'Baterai',
                        'Kamera',
                        'Penyimpanan',
                        'Prosesor'
                    ] as $criterion)

                        <label class="flex cursor-pointer items-center gap-3 rounded-xl border border-slate-200 p-4 transition hover:border-blue-500 hover:bg-blue-50">

                            <input
                                type="checkbox"
                                name="custom_criteria[]"
                                value="{{ $criterion }}"
                                class="custom-criterion h-4 w-4 accent-blue-600"
                            >

                            <span class="text-sm font-medium text-slate-700">
                                {{ $criterion }}
                            </span>

                        </label>

                    @endforeach

                </div>

                <p id="criterion-limit-message"
                   class="mt-3 hidden text-sm text-red-500">
                    Kamu hanya dapat memilih maksimal 2 kriteria.
                </p>

            </div>

            {{-- Pengaturan Skala --}}
            <div id="custom-scale-container" class="mt-6 hidden">

                <h4 class="mb-4 text-sm font-semibold text-slate-700">
                    Atur Skala Kepentingan
                </h4>

                <div id="custom-scale-list" class="space-y-4">
                    {{-- Pengaturan skala ditampilkan melalui JavaScript --}}
                </div>

                <p class="mt-4 text-xs leading-relaxed text-slate-500">
                    Pilih skala 1–5 untuk masing-masing kriteria.
                </p>

            </div>

        </div>

        {{-- Tombol Cari --}}
        <div class="mt-10 border-t border-slate-100 pt-6">

            <button
                type="button"
                class="rounded-xl bg-blue-600 px-10 py-4 font-semibold text-white shadow-sm transition hover:bg-blue-700"
            >
                Cari Rekomendasi Smartphone
            </button>

        </div>

    </div>

</section>

{{-- JavaScript Custom Kriteria --}}
<script>
    const criterionCheckboxes = document.querySelectorAll('.custom-criterion');

    const scaleContainer = document.getElementById('custom-scale-container');
    const scaleList = document.getElementById('custom-scale-list');
    const limitMessage = document.getElementById('criterion-limit-message');

    criterionCheckboxes.forEach((checkbox) => {

        checkbox.addEventListener('change', function () {

            const selected = document.querySelectorAll('.custom-criterion:checked');

            // Membatasi pilihan maksimal 2 kriteria
            if (selected.length > 2) {
                this.checked = false;
                limitMessage.classList.remove('hidden');
                return;
            }

            limitMessage.classList.add('hidden');

            updateCustomScales();

        });

    });

    function updateCustomScales() {

        const selected = document.querySelectorAll('.custom-criterion:checked');

        scaleList.innerHTML = '';

        if (selected.length === 0) {
            scaleContainer.classList.add('hidden');
            return;
        }

        scaleContainer.classList.remove('hidden');

        selected.forEach((checkbox, index) => {

            const criterion = checkbox.value;

            const scaleOptions = `
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            `;

            const item = document.createElement('div');

            item.className = 'rounded-xl border border-slate-200 p-5';

            item.innerHTML = `
                <label class="mb-3 block text-sm font-semibold text-slate-700">
                    ${index + 1}. ${criterion}
                </label>

                <select
                    name="custom_scale[]"
                    class="w-full rounded-lg border border-slate-300 px-4 py-3 text-sm outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
                >
                    ${scaleOptions}
                </select>
            `;

            scaleList.appendChild(item);

        });

    }
</script>

@endsection
