
@extends('layouts.app')

@section('title', 'Hasil Rekomendasi Smartphone')

@section('content')

<section class="mx-auto max-w-7xl px-6 py-16">

    <div class="mb-10">
        <span class="text-sm font-semibold text-blue-600">
            RECOMMENDATION RESULTS
        </span>

        <h1 class="mt-3 text-3xl font-bold text-slate-900 md:text-4xl">
            Smartphone Terbaik untukmu
        </h1>

        <p class="mt-3 text-slate-500">
            Berikut hasil rekomendasi berdasarkan kebutuhan
            dan anggaran yang kamu pilih.
        </p>
    </div>

    <div class="mb-8 rounded-xl border border-slate-200 bg-white p-5">
        <h2 class="font-bold text-slate-900">
            Ringkasan Preferensi
        </h2>

        <div class="mt-4 flex flex-wrap gap-3">
            <span class="rounded-lg bg-blue-50 px-4 py-2 text-sm text-blue-700">
                Brand: Semua Brand
            </span>

            <span class="rounded-lg bg-blue-50 px-4 py-2 text-sm text-blue-700">
                Kebutuhan: Gaming
            </span>

            <span class="rounded-lg bg-blue-50 px-4 py-2 text-sm text-blue-700">
                Budget: Rp 5.000.000
            </span>
        </div>
    </div>

    @php
        $smartphones = [
            [
                'rank' => 1,
                'name' => 'POCO X6 Pro',
                'price' => '4.500.000',
                'ram' => '12 GB',
                'battery' => '5.000 mAh',
                'camera' => '64 MP',
                'storage' => '512 GB',
                'score' => '0,925',
            ],
            [
                'rank' => 2,
                'name' => 'Samsung Galaxy A55',
                'price' => '4.800.000',
                'ram' => '8 GB',
                'battery' => '5.000 mAh',
                'camera' => '50 MP',
                'storage' => '256 GB',
                'score' => '0,887',
            ],
        ];
    @endphp

    <div class="mb-6">
        <h2 class="text-xl font-bold text-slate-900">
            Hasil Perangkingan
        </h2>

        <p class="mt-1 text-sm text-slate-500">
            Smartphone diurutkan berdasarkan nilai SAW tertinggi.
        </p>
    </div>

    <div class="grid gap-6 md:grid-cols-2">

        @foreach ($smartphones as $phone)

            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-md">

                <div class="flex items-center justify-between border-b border-slate-100 px-6 py-4">

                    <span class="font-semibold text-slate-700">
                        Peringkat #{{ $phone['rank'] }}
                    </span>

                    @if ($phone['rank'] === 1)
                        <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">
                            Rekomendasi Terbaik
                        </span>
                    @endif

                </div>

                <div class="p-6">

                    <div class="mb-6 flex h-44 items-center justify-center rounded-xl bg-slate-50">
                        <span class="text-sm text-slate-400">
                            Foto Smartphone
                        </span>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900">
                        {{ $phone['name'] }}
                    </h3>

                    <p class="mt-2 text-2xl font-bold text-blue-600">
                        Rp {{ $phone['price'] }}
                    </p>

                    <div class="mt-6 grid grid-cols-2 gap-4">

                        <div>
                            <p class="text-xs text-slate-500">RAM</p>
                            <p class="mt-1 font-semibold">{{ $phone['ram'] }}</p>
                        </div>

                        <div>
                            <p class="text-xs text-slate-500">Baterai</p>
                            <p class="mt-1 font-semibold">{{ $phone['battery'] }}</p>
                        </div>

                        <div>
                            <p class="text-xs text-slate-500">Kamera</p>
                            <p class="mt-1 font-semibold">{{ $phone['camera'] }}</p>
                        </div>

                        <div>
                            <p class="text-xs text-slate-500">Penyimpanan</p>
                            <p class="mt-1 font-semibold">{{ $phone['storage'] }}</p>
                        </div>

                    </div>

                    <div class="mt-6 flex items-center justify-between rounded-xl bg-blue-50 p-4">

                        <span class="font-semibold text-slate-700">
                            Nilai SAW
                        </span>

                        <span class="text-xl font-bold text-blue-700">
                            {{ $phone['score'] }}
                        </span>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

    {{-- Feedback Pengguna --}}
    <div id="feedback-section" class="mt-12 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm md:p-8">

        <div class="mb-6">
            <span class="text-sm font-semibold text-blue-600">
                USER FEEDBACK
            </span>

            <h2 class="mt-2 text-xl font-bold text-slate-900">
                Feedback Pengguna
            </h2>

            <p class="mt-2 text-sm text-slate-500">
                Apakah hasil rekomendasi ini membantu?
            </p>
        </div>

        {{-- Pilihan Feedback --}}
        <div class="grid gap-4 sm:grid-cols-2">

            <label class="cursor-pointer">
                <input
                    type="radio"
                    name="feedback"
                    value="iya"
                    class="peer sr-only"
                    onchange="handleFeedback(this.value)"
                >

                <div class="flex items-center justify-center gap-3 rounded-xl border border-slate-200 p-5 transition hover:border-blue-400 peer-checked:border-blue-600 peer-checked:bg-blue-50">

                    <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 9V5a3 3 0 00-3-3l-4 7v11h11.28a2 2 0 001.98-1.72l1.38-9A2 2 0 0017.66 8H14zM7 22H4a2 2 0 01-2-2v-7a2 2 0 012-2h3"/>
                    </svg>

                    <span class="font-semibold text-slate-700">
                        Iya, membantu
                    </span>

                </div>
            </label>

            <label class="cursor-pointer">
                <input
                    type="radio"
                    name="feedback"
                    value="tidak"
                    class="peer sr-only"
                    onchange="handleFeedback(this.value)"
                >

                <div class="flex items-center justify-center gap-3 rounded-xl border border-slate-200 p-5 transition hover:border-blue-400 peer-checked:border-blue-600 peer-checked:bg-blue-50">

                    <svg class="h-6 w-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 15v4a3 3 0 003 3l4-7V4H5.72a2 2 0 00-1.98 1.72l-1.38 9A2 2 0 004.34 17H10zM17 2h3a2 2 0 012 2v7a2 2 0 01-2 2h-3"/>
                    </svg>

                    <span class="font-semibold text-slate-700">
                        Tidak membantu
                    </span>

                </div>
            </label>

        </div>

        {{-- Kolom Alasan --}}
        <div id="feedback-reason-container" class="mt-6 hidden">

            <label for="feedback_reason" class="mb-2 block text-sm font-semibold text-slate-700">
                Apa alasan hasil rekomendasi ini kurang membantu?
            </label>

            <textarea
                id="feedback_reason"
                rows="4"
                placeholder="Tuliskan saran atau alasan kamu di sini..."
                class="w-full rounded-xl border border-slate-300 px-4 py-3 text-sm outline-none transition placeholder:text-slate-400 focus:border-blue-500 focus:ring-2 focus:ring-blue-100"
            ></textarea>

        </div>

        {{-- Tombol Kirim --}}
        <div id="feedback-submit-container" class="mt-6 hidden">

            <button
                type="button"
                onclick="submitFeedback()"
                class="rounded-xl bg-blue-600 px-8 py-3 font-semibold text-white shadow-sm transition hover:bg-blue-700"
            >
                Kirim Feedback
            </button>

        </div>

        {{-- Pesan Konfirmasi --}}
        <div id="feedback-success" class="mt-6 hidden rounded-xl border border-green-200 bg-green-50 p-4">

            <p class="font-semibold text-green-700">
                Terima kasih
            </p>

            <p class="mt-1 text-sm text-green-600">
                Masukan anda sangat berarti untuk pengembangan sistem rekomendasi ini.
            </p>

        </div>

    </div>

    <div class="mt-10 flex justify-center">
        <a href="/rekomendasi"
           class="rounded-xl border border-slate-300 px-6 py-3 font-semibold text-slate-700 transition hover:bg-slate-100">
            Kembali ke Rekomendasi
        </a>
    </div>

</section>

{{-- JavaScript Feedback --}}
<script>

    function handleFeedback(value) {

        const reasonContainer = document.getElementById('feedback-reason-container');
        const submitContainer = document.getElementById('feedback-submit-container');
        const successMessage = document.getElementById('feedback-success');

        successMessage.classList.add('hidden');
        submitContainer.classList.remove('hidden');

        if (value === 'tidak') {
            reasonContainer.classList.remove('hidden');
        } else {
            reasonContainer.classList.add('hidden');
        }

    }

    function submitFeedback() {

        const selectedFeedback = document.querySelector('input[name="feedback"]:checked');

        if (!selectedFeedback) {
            return;
        }

        const reason = document.getElementById('feedback_reason').value.trim();

        if (selectedFeedback.value === 'tidak' && reason === '') {
            alert('Silakan isi alasan atau saran terlebih dahulu.');
            return;
        }

        document.getElementById('feedback-submit-container').classList.add('hidden');
        document.getElementById('feedback-reason-container').classList.add('hidden');

        document.querySelectorAll('input[name="feedback"]').forEach((radio) => {
            radio.disabled = true;
        });

        document.getElementById('feedback-success').classList.remove('hidden');

    }

</script>

@endsection
