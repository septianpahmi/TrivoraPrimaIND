{{-- ABOUT --}}
<section id="about" data-reveal class="relative overflow-hidden bg-white py-24 text-slate-900 lg:py-32">

    {{-- Decorative background --}}
    <div class="pointer-events-none absolute -right-40 top-10 h-[28rem] w-[28rem] rounded-full bg-blue-100/70 blur-3xl">
    </div>
    <div class="pointer-events-none absolute -left-40 bottom-0 h-[24rem] w-[24rem] rounded-full bg-sky-100/60 blur-3xl">
    </div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Section heading --}}
        <div class="max-w-3xl">
            <div class="mb-5 flex items-center gap-3">
                <span class="h-px w-10 bg-blue-600"></span>
                <h2 class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-600">{{ $profile->about_badge }}
                </h2>
            </div>

            <h3 class="text-4xl font-bold leading-[1.1] tracking-tight sm:text-5xl lg:text-[3.5rem]">
                {{ $profile->about_title }}
                <span class="text-blue-600">{{ $profile->about_highlight }}</span>
            </h3>

            <p class="mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                {{ $profile->about_description }}
            </p>
        </div>

        <div class="mt-14 grid items-stretch gap-10 lg:grid-cols-[1.05fr_.95fr] lg:gap-16">

            {{-- LEFT CONTENT --}}
            <div class="flex flex-col justify-center">

                <div class="border-l-2 border-blue-600 pl-5">
                    <p class="text-sm font-semibold uppercase tracking-[0.16em] text-slate-400">
                        Profil Perusahaan
                    </p>
                    <p class="mt-3 max-w-2xl text-base leading-8 text-slate-600">
                        {{ $profile->about_profile }}
                    </p>
                </div>
                <div class="mt-7">
                    <p class="text-sm font-semibold uppercase tracking-[0.16em] text-slate-400">
                        {{ $profile->about_vision_title }}
                    </p>
                    <span class="mt-2 max-w-2xl text-slate-600 leading-8 text-slate-500">
                        {!! $profile->about_vision !!}
                    </span>

                </div>
                <div class="mt-7">
                    <p class="text-sm font-semibold uppercase tracking-[0.16em] text-slate-400">
                        {{ $profile->about_mission_title }}
                    </p>
                    <span class="mt-2 max-w-2xl text-slate-600 leading-8 text-slate-500">
                        {!! $profile->about_mission !!}
                    </span>

                </div>
                {{-- Key facts --}}
                <div class="mt-10 grid gap-4 sm:grid-cols-3">
                    <div
                        class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-lg hover:shadow-blue-900/5">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M6.75 3.75h10.5A2.25 2.25 0 0 1 19.5 6v12a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 18V6a2.25 2.25 0 0 1 2.25-2.25ZM8.25 8.25h7.5m-7.5 3.75h7.5m-7.5 3.75h4.5" />
                            </svg>
                        </div>
                        <p class="mt-4 text-2xl font-bold text-slate-900">{{ $profile->about_founded_year }}</p>
                        <p class="mt-1 text-xs font-medium text-slate-500">Tahun Berdiri</p>
                    </div>

                    <div
                        class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-lg hover:shadow-blue-900/5">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0-13.5v9m-4.5-4.5h9" />
                            </svg>
                        </div>
                        <p class="mt-4 text-2xl font-bold text-slate-900">3</p>
                        <p class="mt-1 text-xs font-medium text-slate-500">Segmen Utama</p>
                    </div>

                    <div
                        class="group rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-blue-200 hover:shadow-lg hover:shadow-blue-900/5">
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-blue-600 transition group-hover:bg-blue-600 group-hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3.75 12h16.5M12 3.75v16.5m7.5-12.75-15 9m0-9 15 9" />
                            </svg>
                        </div>
                        <p class="mt-4 text-lg font-bold text-slate-900">One-Stop</p>
                        <p class="mt-1 text-xs font-medium text-slate-500">Solution Pengadaan</p>
                    </div>
                </div>

                {{-- <a href="#products"
                    class="group mt-9 inline-flex w-fit items-center gap-3 text-sm font-semibold text-blue-600">
                    Lihat Produk Kami
                    <span
                        class="flex h-9 w-9 items-center justify-center rounded-full border border-blue-200 transition-all duration-300 group-hover:bg-blue-600 group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-0.5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M5 12h14m-6-6 6 6-6 6" />
                        </svg>
                    </span>
                </a> --}}

            </div>

            {{-- RIGHT CORPORATE VISUAL --}}
            <div class="relative flex items-center">
                <div
                    class="relative w-full overflow-hidden rounded-[2rem] bg-slate-950 p-7 shadow-2xl shadow-blue-950/15 sm:p-9 lg:p-10">

                    {{-- Background effects --}}
                    <div
                        class="pointer-events-none absolute -right-24 -top-24 h-72 w-72 rounded-full bg-blue-600/20 blur-3xl">
                    </div>
                    <div
                        class="pointer-events-none absolute -bottom-28 -left-24 h-72 w-72 rounded-full bg-cyan-500/10 blur-3xl">
                    </div>
                    <div class="pointer-events-none absolute inset-0 opacity-[0.055]"
                        style="background-image:linear-gradient(rgba(255,255,255,.6) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,.6) 1px,transparent 1px);background-size:38px 38px;">
                    </div>

                    <div class="relative">
                        <div class="flex items-start justify-between gap-5">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.22em] text-blue-400">PT
                                    Trivora Prima Indonesia</p>
                                <h3 class="mt-3 max-w-sm text-3xl font-bold leading-tight text-white sm:text-4xl">
                                    General Trading
                                    <span class="text-blue-500"> &amp; Supply</span>
                                </h3>
                            </div>

                            <div
                                class="hidden h-14 w-14 shrink-0 items-center justify-center rounded-2xl border border-blue-400/20 bg-blue-500/10 sm:flex">
                                <img src="/img/logotrivora.svg" class="h-8 w-8 object-contain"
                                    alt="Trivora Prima Indonesia">
                            </div>
                        </div>

                        <div class="mt-10 grid gap-3 sm:grid-cols-3">
                            <div
                                class="rounded-2xl border border-white/10 bg-white/[0.045] p-4 transition duration-300 hover:-translate-y-1 hover:border-blue-400/30 hover:bg-white/[0.07]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M4.5 6.75h15v10.5h-15zM8.25 4.5v4.5m7.5-4.5v4.5M7.5 12h3m3 0h3m-9 3h3m3 0h3" />
                                </svg>
                                <p class="mt-4 text-sm font-semibold text-white">Industri</p>
                                <p class="mt-1 text-xs leading-5 text-slate-500">Kebutuhan operasional</p>
                            </div>

                            <div
                                class="rounded-2xl border border-white/10 bg-white/[0.045] p-4 transition duration-300 hover:-translate-y-1 hover:border-blue-400/30 hover:bg-white/[0.07]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3.75 10.5 12 5.25l8.25 5.25M5.25 9.75v8.5a1.5 1.5 0 0 0 1.5 1.5h10.5a1.5 1.5 0 0 0 1.5-1.5v-8.5M9 19.75v-5.5h6v5.5" />
                                </svg>
                                <p class="mt-4 text-sm font-semibold text-white">Komersial</p>
                                <p class="mt-1 text-xs leading-5 text-slate-500">Kebutuhan bisnis</p>
                            </div>

                            <div
                                class="rounded-2xl border border-white/10 bg-white/[0.045] p-4 transition duration-300 hover:-translate-y-1 hover:border-blue-400/30 hover:bg-white/[0.07]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M5.25 5.25h13.5v13.5H5.25zM8.25 8.25h7.5v7.5h-7.5z" />
                                </svg>
                                <p class="mt-4 text-sm font-semibold text-white">Retail</p>
                                <p class="mt-1 text-xs leading-5 text-slate-500">Beragam kebutuhan</p>
                            </div>
                        </div>

                        <div
                            class="mt-8 flex flex-col gap-4 rounded-2xl border border-blue-400/15 bg-blue-500/[0.07] p-5 sm:flex-row sm:items-center sm:justify-between">
                            <div class="flex items-center gap-3">
                                <span
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-500/15 text-blue-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M12 3.75v16.5m8.25-8.25H3.75" />
                                    </svg>
                                </span>
                                <div>
                                    <p class="text-xs font-medium text-blue-300">Model Pengadaan</p>
                                    <p class="text-sm font-semibold text-white">One-Stop Solution</p>
                                </div>
                            </div>

                            <span class="inline-flex items-center gap-2 text-xs font-medium text-slate-400">
                                <span class="h-2 w-2 rounded-full bg-blue-400 shadow-lg shadow-blue-400/50"></span>
                                Didirikan 2026
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
