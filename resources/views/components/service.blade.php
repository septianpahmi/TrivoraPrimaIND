{{-- SERVICES --}}
<section id="services" data-reveal class="relative overflow-hidden bg-white py-24 text-slate-900 sm:py-28 lg:py-32">

    {{-- Background Decoration --}}
    <div class="pointer-events-none absolute -right-40 top-0 h-[500px] w-[500px] rounded-full bg-blue-100/50 blur-3xl">
    </div>
    <div class="pointer-events-none absolute -left-40 bottom-0 h-[350px] w-[350px] rounded-full bg-slate-100 blur-3xl">
    </div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Section Heading --}}
        <div class="max-w-3xl">

            <div class="mb-5 flex items-center gap-3">
                <span class="h-px w-10 bg-blue-600"></span>

                <h2 class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-600">
                    Layanan Kami
                </h2>
            </div>

            <h3 class="text-4xl landig-[1.1] font-bold tracking-tight text-slate-950 sm:text-5xl lg:text-6xl">
                Solusi Pengadaan yang
                <span class="text-blue-600">Terintegrasi.</span>
            </h3>

            <p class="mt-6 max-w-2xl text-base leading-8 text-slate-600 sm:text-lg">
                Kami menyediakan layanan perdagangan dan distribusi yang membantu
                mitra mendapatkan kebutuhan produk melalui proses pengadaan yang
                lebih terarah dan efisien.
            </p>

        </div>

        {{-- Services --}}

        <div class="mt-14 grid gap-5 sm:grid-cols-2 lg:mt-16 lg:grid-cols-4">

            @foreach ($services as $service)
                <article
                    class="group relative overflow-hidden rounded-[1.75rem] border border-slate-200 bg-white p-7 shadow-sm transition-all duration-500 hover:-translate-y-2 hover:border-blue-200 hover:shadow-2xl hover:shadow-blue-900/10 sm:p-8">

                    {{-- Number --}}
                    <div
                        class="absolute right-6 top-6 text-4xl font-bold text-slate-100 transition-colors duration-300 group-hover:text-blue-50">
                        {{ $loop->iteration }}
                    </div>

                    {{-- Icon --}}
                    @php
                        $icons = [
                            'building-office' => 'heroicon-o-building-office-2',
                            'truck' => 'heroicon-o-truck',
                            'cube' => 'heroicon-o-cube',
                            'globe' => 'heroicon-o-globe-alt',
                            'chart-pie' => 'heroicon-o-chart-pie',
                            'light-bulb' => 'heroicon-o-light-bulb',
                            'puzzle-piece' => 'heroicon-o-puzzle-piece',
                            'shield-check' => 'heroicon-o-shield-check',
                            'user-group' => 'heroicon-o-user-group',
                            'wrench' => 'heroicon-o-wrench-screwdriver',
                            'briefcase' => 'heroicon-o-briefcase',
                            'cog' => 'heroicon-o-cog-6-tooth',
                            'archive-box' => 'heroicon-o-archive-box',
                            'shopping-bag' => 'heroicon-o-shopping-bag',
                            'clipboard-document' => 'heroicon-o-clipboard-document',
                        ];

                        $icon = $icons[$service->icon] ?? 'heroicon-o-squares-2x2';
                    @endphp

                    <div
                        class="relative flex h-14 w-14 items-center justify-center rounded-2xl bg-blue-50 text-blue-600 ring-1 ring-blue-100 transition-all duration-300 group-hover:bg-blue-600 group-hover:text-white group-hover:shadow-lg group-hover:shadow-blue-600/20">
                        <x-dynamic-component :component="$icon" class="h-6 w-6" />
                    </div>

                    {{-- Content --}}
                    <h3 class="relative mt-7 text-xl font-bold tracking-tight text-slate-950">
                        {{ $service['name'] }}
                    </h3>

                    <p class="mt-3 text-sm leading-7 text-slate-600">
                        {{ $service['description'] }}
                    </p>

                    {{-- CTA --}}
                    {{-- <a href="#contact"
                        class="mt-7 inline-flex items-center gap-2 text-sm font-semibold text-blue-600 transition-all duration-300 group-hover:gap-3">
                        Pelajari Layanan

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                        </svg>
                    </a> --}}

                    {{-- Bottom Accent --}}
                    <div
                        class="absolute inset-x-0 bottom-0 h-1 origin-left scale-x-0 bg-blue-600 transition-transform duration-500 group-hover:scale-x-100">
                    </div>

                </article>
            @endforeach

        </div>

        {{-- Bottom CTA --}}
        <div class="mt-12 flex justify-center lg:mt-16">
            <a href="#contact"
                class="group inline-flex items-center gap-3 rounded-full bg-slate-950 px-7 py-3.5 text-sm font-semibold text-white shadow-lg shadow-slate-900/10 transition-all duration-300 hover:-translate-y-1 hover:bg-blue-600 hover:shadow-xl hover:shadow-blue-600/20">
                Diskusikan Kebutuhan Anda

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                </svg>
            </a>
        </div>

    </div>
</section>
