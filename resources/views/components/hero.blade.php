<section id="home" data-reveal class="relative flex min-h-screen items-center overflow-hidden">

    {{-- BACKGROUND --}}
    <div class="absolute inset-0 bg-slate-950"></div>

    <div class="absolute -left-40 top-20 h-96 w-96 rounded-full bg-blue-600/20 blur-3xl"></div>

    <div class="absolute -right-40 bottom-0 h-[500px] w-[500px] rounded-full bg-cyan-500/10 blur-3xl"></div>

    {{-- GRID --}}
    <div class="absolute inset-0 opacity-[0.06]"
        style="
                    background-image:
                    linear-gradient(rgba(255,255,255,.5) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(255,255,255,.5) 1px, transparent 1px);
                    background-size: 60px 60px;
                ">
    </div>

    <div class="relative mx-auto w-full max-w-7xl px-6 py-32 lg:px-8">

        <div class="grid items-center gap-16 lg:grid-cols-2">

            {{-- LEFT --}}
            <div>

                <div
                    class="mb-7 inline-flex items-center gap-2 rounded-full border border-blue-400/20 bg-blue-500/10 px-4 py-2 text-xs font-medium text-blue-300">
                    <span class="h-2 w-2 animate-pulse rounded-full bg-blue-400"></span>
                    {{ $profile->hero_badge }}
                </div>

                <h1 class="max-w-4xl text-5xl font-bold leading-[1.05] tracking-tight sm:text-6xl lg:text-7xl">
                    {{ $profile->hero_title }}
                    <span class="block text-blue-500">
                        {{ $profile->hero_highlight }}
                    </span>
                    {{-- for a Smarter Future. --}}
                </h1>

                <p class="mt-7 max-w-xl text-base leading-8 text-slate-400 sm:text-lg">
                    {{ $profile->hero_description }}
                </p>

                <div class="mt-10 flex flex-col gap-4 sm:flex-row">

                    <a href="#products"
                        class="group inline-flex items-center justify-center gap-3 rounded-full bg-blue-600 px-7 py-4 text-sm font-semibold transition hover:bg-blue-500 hover:shadow-xl hover:shadow-blue-600/20">
                        Lihat Produk

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M5 12h14m-6-6 6 6-6 6" />
                        </svg>
                    </a>

                    <a href="#contact"
                        class="inline-flex items-center justify-center rounded-full border border-white/10 bg-white/5 px-7 py-4 text-sm font-semibold backdrop-blur-sm transition hover:border-blue-400/40 hover:bg-white/10">
                        Hubungi Kami
                    </a>

                </div>

            </div>


            {{-- RIGHT FUTURISTIC VISUAL --}}
            <div class="relative hidden lg:block">

                <div class="relative mx-auto aspect-square max-w-[520px]">

                    {{-- Glow --}}
                    <div class="absolute inset-20 rounded-full bg-blue-500/20 blur-3xl"></div>

                    {{-- Outer Ring --}}
                    <div class="absolute inset-10 rounded-full border border-blue-400/20"></div>

                    <div class="absolute inset-20 rounded-full border border-blue-400/20"></div>

                    {{-- Center --}}
                    <div class="absolute inset-0 flex items-center justify-center">

                        <div
                            class="relative flex h-52 w-52 items-center justify-center rounded-[2.5rem] border border-blue-400/30 bg-gradient-to-br from-blue-600/30 to-slate-900/80 shadow-2xl shadow-blue-600/20 backdrop-blur-xl">

                            <div class="absolute inset-5 rounded-[2rem] border border-white/10"></div>

                            <img src="/img/logotrivora.svg" class="h-20 object-contain" alt="Trivora Prima Indonesia"
                                srcset="">

                        </div>

                    </div>

                    {{-- Floating Cards --}}
                    <div
                        class="absolute left-0 top-1/4 rounded-2xl border border-white/10 bg-white/5 px-5 py-4 backdrop-blur-xl">
                        <div class="flex items-center gap-3">
                            <div class="rounded-xl bg-blue-500/20 p-3 text-blue-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>

                            <div>
                                <p class="text-xs text-slate-400">Inovasi</p>
                                <p class="text-sm font-semibold">Siap Menghadapi Masa Depan</p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="absolute bottom-1/4 right-0 rounded-2xl border border-white/10 bg-white/5 px-5 py-4 backdrop-blur-xl">
                        <div class="flex items-center gap-3">
                            <div class="rounded-xl bg-blue-500/20 p-3 text-blue-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.291 9 11.623C17.176 19.291 21 14.591 21 9c0-.866-.092-1.71-.266-2.516z" />
                                </svg>
                            </div>

                            <div>
                                <p class="text-xs text-slate-400">Bisnis</p>
                                <p class="text-sm font-semibold">Mitra Tepercaya</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- SCROLL INDICATOR --}}
    <div
        class="absolute bottom-8 left-1/2 hidden -translate-x-1/2 flex-col items-center gap-3 text-xs text-slate-500 sm:flex">
        <span>Gulir untuk melihat lebih lanjut</span>
        <div class="h-10 w-px bg-gradient-to-b from-blue-500 to-transparent"></div>
    </div>

</section>
