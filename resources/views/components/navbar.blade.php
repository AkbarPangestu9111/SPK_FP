
<nav class="sticky top-0 z-50 border-b border-slate-200 bg-white">
    <div class="mx-auto max-w-7xl px-6">
        <div class="flex h-20 items-center justify-between">

            {{-- Logo --}}
            <a href="{{ auth()->check() ? '/dashboard' : '/' }}"
               class="flex items-center gap-3">

                <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600">
                    <span class="text-xl font-bold text-white">S</span>
                </div>

                <div>
                    <h1 class="text-lg font-bold text-slate-900">
                        SPK Smartphone
                    </h1>
                    <p class="text-xs text-slate-500">
                        Smart Recommendation System
                    </p>
                </div>
            </a>

            {{-- Menu Navigasi --}}
            <div class="hidden items-center gap-8 md:flex">

                <a href="{{ auth()->check() ? '/dashboard' : '/' }}"
                   class="text-sm font-semibold text-blue-600">
                    Beranda
                </a>

                <a href="{{ auth()->check() ? '/rekomendasi' : '/login' }}"
                   class="text-sm font-medium text-slate-600 transition hover:text-blue-600">
                    Rekomendasi
                </a>

                <a href="{{ auth()->check() ? '/dashboard#cara-kerja' : '/#cara-kerja' }}"
                   class="text-sm font-medium text-slate-600 transition hover:text-blue-600">
                    Tentang
                </a>

            </div>

            {{-- Kondisi Guest dan User --}}
            <div class="flex items-center gap-3">

                @guest

                    {{-- Tombol Guest --}}
                    <a href="/login"
                       class="rounded-lg px-4 py-2.5 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">
                        Login
                    </a>

                    <a href="/register"
                       class="rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-blue-700">
                        Sign Up
                    </a>

            @else

    {{-- Tombol Logout User --}}
    <button
        type="button"
        class="rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-blue-700">
        Logout
    </button>

@endguest    
            

            </div>

        </div>
    </div>
</nav>