{{-- PORTFOLIO / PROJECT --}}
<section id="portfolio" data-reveal x-data="{ activeCategory: 'all' }"
    class="relative overflow-hidden bg-slate-950 py-24 text-white sm:py-28 lg:py-32">

    {{-- Background --}}
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute left-1/4 top-0 h-[500px] w-[500px] rounded-full bg-blue-600/10 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 h-[450px] w-[450px] rounded-full bg-cyan-500/10 blur-3xl"></div>

        <div class="absolute inset-0 opacity-[0.08]"
            style="background-image:linear-gradient(rgba(255,255,255,.5) 1px, transparent 1px),linear-gradient(90deg, rgba(255,255,255,.5) 1px, transparent 1px);background-size:70px 70px;">
        </div>
    </div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Heading --}}
        <div class="max-w-3xl">

            <div class="mb-5 flex items-center gap-3">
                <span class="h-px w-10 bg-blue-500"></span>

                <h2 class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-400">
                    Portfolio
                </h2>
            </div>

            <h3 class="text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl">
                Project & Business
                <span class="text-blue-400">Portfolio.</span>
            </h3>

            <p class="mt-6 max-w-2xl text-base leading-8 text-slate-400 sm:text-lg">
                Dokumentasi proyek dan aktivitas bisnis PT Trivora Prima Indonesia
                dalam mendukung kebutuhan pengadaan dan distribusi produk bagi
                berbagai sektor.
            </p>

        </div>

        {{-- Category Filter --}}
        <div class="mt-10 flex flex-wrap gap-3">

            <button @click="activeCategory = 'all'"
                :class="activeCategory === 'all'
                    ?
                    'bg-blue-600 text-white border-blue-600' :
                    'border-white/10 bg-white/[0.04] text-slate-400 hover:border-blue-500/40 hover:text-white'"
                class="rounded-full border px-5 py-2.5 text-sm font-semibold transition-all duration-300">
                Semua
            </button>

            <button @click="activeCategory = 'industrial'"
                :class="activeCategory === 'industrial'
                    ?
                    'bg-blue-600 text-white border-blue-600' :
                    'border-white/10 bg-white/[0.04] text-slate-400 hover:border-blue-500/40 hover:text-white'"
                class="rounded-full border px-5 py-2.5 text-sm font-semibold transition-all duration-300">
                Industrial
            </button>

            <button @click="activeCategory = 'commercial'"
                :class="activeCategory === 'commercial'
                    ?
                    'bg-blue-600 text-white border-blue-600' :
                    'border-white/10 bg-white/[0.04] text-slate-400 hover:border-blue-500/40 hover:text-white'"
                class="rounded-full border px-5 py-2.5 text-sm font-semibold transition-all duration-300">
                Commercial
            </button>

            <button @click="activeCategory = 'retail'"
                :class="activeCategory === 'retail'
                    ?
                    'bg-blue-600 text-white border-blue-600' :
                    'border-white/10 bg-white/[0.04] text-slate-400 hover:border-blue-500/40 hover:text-white'"
                class="rounded-full border px-5 py-2.5 text-sm font-semibold transition-all duration-300">
                Retail
            </button>

        </div>

        {{-- Projects --}}

        <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            @foreach ($portofolios as $project)
                <article x-show="activeCategory === 'all' || activeCategory === '{{ $project['category'] }}'"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-3"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="group overflow-hidden rounded-[1.75rem] border border-white/10 bg-white/[0.04] transition-all duration-500 hover:-translate-y-2 hover:border-blue-500/30 hover:bg-white/[0.07] hover:shadow-2xl hover:shadow-blue-950/30">

                    {{-- Image --}}
                    <div class="relative aspect-[16/10] overflow-hidden">

                        <img src="storage/{{ $project['image'] }}" alt="{{ $project['title'] }}" loading="lazy"
                            class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110">

                        {{-- Overlay --}}
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent opacity-70">
                        </div>

                        {{-- Category --}}
                        <div class="absolute left-5 top-5">
                            <span
                                class="rounded-full border border-white/20 bg-slate-950/70 px-3 py-1.5 text-[11px] font-semibold uppercase tracking-[0.16em] text-white backdrop-blur-md">
                                {{ $project['category'] }}
                            </span>
                        </div>

                        {{-- Arrow --}}
                        <div
                            class="absolute bottom-5 right-5 flex h-10 w-10 translate-y-3 items-center justify-center rounded-full border border-white/20 bg-white/10 text-white opacity-0 backdrop-blur-md transition-all duration-300 group-hover:translate-y-0 group-hover:opacity-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>
                        </div>

                    </div>

                    {{-- Content --}}
                    <div class="p-6 sm:p-7">

                        <h3 class="text-xl font-bold tracking-tight text-white">
                            {{ $project['title'] }}
                        </h3>

                        <p class="mt-3 text-sm leading-7 text-slate-400">
                            {!! Str::limit(strip_tags($project->description), 100) !!}
                        </p>

                        <a href="#contact"
                            class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-blue-400 transition-all duration-300 group-hover:gap-3 group-hover:text-blue-300">
                            Diskusikan Project

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>
                        </a>

                    </div>

                </article>
            @endforeach

        </div>

    </div>
</section>
