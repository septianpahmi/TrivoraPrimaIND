    {{-- Footer --}}
    <footer class="border-t border-white/10 bg-slate-950 text-white">

        {{-- Main Footer --}}
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">

            <div class="grid gap-12 lg:grid-cols-12">

                {{-- Perusahaan --}}
                <div class="lg:col-span-5">

                    <a href="#home" class="inline-flex items-center gap-3">

                        <img src="/img/logotrivora.svg" class="h-9 w-auto max-w-[150px] object-contain"
                            alt="Trivora Prima Indonesia">

                        <div>
                            <div class="text-sm font-bold tracking-wide text-white">
                                TRIVORA
                            </div>

                            <div class="text-[10px] uppercase tracking-[0.2em] text-slate-500">
                                Prima Indonesia
                            </div>
                        </div>

                    </a>


                    <p class="mt-5 max-w-lg text-sm leading-7 text-slate-400">
                        {{ $profile->about_description }}
                    </p>


                    {{-- Social Media --}}
                    <div class="mt-6 flex flex-wrap items-center gap-2.5">

                        {{-- LinkedIn --}}
                        <a href="{{ $profile->social_linkedin ?? '#' }}" aria-label="LinkedIn"
                            class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/5 text-slate-400 transition hover:border-blue-500/30 hover:bg-blue-600 hover:text-white">
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M6.5 8.5H3V21h3.5V8.5zM4.75 3A2.05 2.05 0 102.7 5.05 2.05 2.05 0 004.75 3zM21 13.85c0-3.76-2-5.52-4.68-5.52-2.15 0-3.1 1.18-3.64 2.01V8.5H9.18V21h3.5v-6.19c0-1.63.31-3.21 2.33-3.21 1.99 0 2.02 1.87 2.02 3.32V21H21v-7.15z" />
                            </svg>
                        </a>

                        {{-- Instagram --}}
                        <a href="{{ $profile->social_instagram ?? '#' }}" aria-label="Instagram"
                            class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/5 text-slate-400 transition hover:border-blue-500/30 hover:bg-blue-600 hover:text-white">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="1.8">
                                <rect x="3" y="3" width="18" height="18" rx="5" />
                                <circle cx="12" cy="12" r="4" />
                                <circle cx="17.5" cy="6.5" r=".7" fill="currentColor" stroke="none" />
                            </svg>
                        </a>

                        {{-- Facebook --}}
                        <a href="{{ $profile->social_facebook ?? '#' }}" aria-label="Facebook"
                            class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/10 bg-white/5 text-slate-400 transition hover:border-blue-500/30 hover:bg-blue-600 hover:text-white">
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M13.5 21v-8h2.75l.4-3h-3.15V8.08c0-.87.24-1.46 1.5-1.46h1.77V3.94A23.2 23.2 0 0014.2 3c-2.55 0-4.3 1.56-4.3 4.43V10H7v3h2.9v8h3.6z" />
                            </svg>
                        </a>

                    </div>

                </div>


                {{-- Quick Links --}}
                <div class="lg:col-span-2">

                    <h3 class="text-sm font-semibold text-white">
                        Perusahaan
                    </h3>

                    <ul class="mt-5 space-y-3 text-sm">

                        <li>
                            <a href="#about" class="text-slate-400 transition hover:text-blue-400">
                                Tentang Kami
                            </a>
                        </li>

                        <li>
                            <a href="#products" class="text-slate-400 transition hover:text-blue-400">
                                Products
                            </a>
                        </li>

                        <li>
                            <a href="#services" class="text-slate-400 transition hover:text-blue-400">
                                Layanan
                            </a>
                        </li>

                        <li>
                            <a href="#portfolio" class="text-slate-400 transition hover:text-blue-400">
                                Portfolio
                            </a>
                        </li>

                        <li>
                            <a href="#contact" class="text-slate-400 transition hover:text-blue-400">
                                Kontak
                            </a>
                        </li>

                    </ul>

                </div>


                {{-- Layanan --}}
                <div class="lg:col-span-2">

                    <h3 class="text-sm font-semibold text-white">
                        Layanan
                    </h3>

                    <ul class="mt-5 space-y-3 text-sm">

                        <li>
                            <a href="#services" class="text-slate-400 transition hover:text-blue-400">
                                Bisnis Solutions
                            </a>
                        </li>

                        <li>
                            <a href="#products" class="text-slate-400 transition hover:text-blue-400">
                                Products
                            </a>
                        </li>

                        <li>
                            <a href="#services" class="text-slate-400 transition hover:text-blue-400">
                                Konsultasi
                            </a>
                        </li>

                        <li>
                            <a href="#services" class="text-slate-400 transition hover:text-blue-400">
                                Kemitraan
                            </a>
                        </li>

                    </ul>

                </div>


                {{-- Kontak --}}
                <div class="lg:col-span-3">

                    <h3 class="text-sm font-semibold text-white">
                        Hubungi Kami
                    </h3>

                    <div class="mt-5 space-y-4 text-sm">

                        <a href="mailto:{{ $profile->contact_email }}"
                            class="flex min-w-0 items-start gap-3 text-slate-400 transition hover:text-blue-400">
                            <svg class="mt-0.5 h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>

                            <span class="min-w-0 break-all">
                                {{ $profile->contact_email }}
                            </span>
                        </a>


                        <a href="tel:6287749043084"
                            class="flex items-start gap-3 text-slate-400 transition hover:text-blue-400">
                            <svg class="mt-0.5 h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 5a2 2 0 012-2h2.3a2 2 0 011.94 1.515L10 8a2 2 0 01-.45 1.82l-1.3 1.3a16 16 0 006.63 6.63l1.3-1.3A2 2 0 0118 16l3.485.76A2 2 0 0123 18.7V21a2 2 0 01-2 2C10.507 23 1 13.493 1 3a2 2 0 012-2z" />
                            </svg>

                            <span class="whitespace-nowrap">
                                {{ $profile->contact_phone }}
                            </span>
                        </a>


                        <div class="flex items-start gap-3 text-slate-400">

                            <svg class="mt-0.5 h-4 w-4 shrink-0" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 21s8-4.5 8-11a8 8 0 10-16 0c0 6.5 8 11 8 11z" />
                                <circle cx="12" cy="10" r="2.5" />
                            </svg>

                            <span class="min-w-0 break-words leading-6">
                                {{ $profile->contact_address }}
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        {{-- Bottom Footer --}}
        <div class="border-t border-white/10">

            <div
                class="mx-auto flex max-w-7xl flex-col gap-4 px-6 py-6 text-center text-xs text-slate-500 sm:flex-row sm:items-center sm:justify-between sm:text-left lg:px-8">

                <p>
                    © {{ date('Y') }} PT Trivora Prima Indonesia.
                    Hak cipta dilindungi.
                </p>

                <div class="flex flex-wrap items-center justify-center gap-x-5 gap-y-2 sm:justify-end">

                    <a href="{{ route('privacy-policy') }}" class="transition hover:text-white">
                        Kebijakan Privasi
                    </a>

                    <a href="{{ route('terms-conditions') }}" class="transition hover:text-white">
                        Syarat & Ketentuan
                    </a>

                </div>

            </div>

        </div>

    </footer>



    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sections = document.querySelectorAll('[data-reveal]');

            if (!sections.length) return;

            const observer = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach(entry => {
                        if (!entry.isIntersecting) return;

                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    });
                }, {
                    threshold: 0.12,
                    rootMargin: '0px 0px -40px 0px'
                }
            );

            sections.forEach(section => observer.observe(section));
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sections = document.querySelectorAll(
                '#home, #about, #products, #services, #portfolio, #contact'
            );

            const navLinks = document.querySelectorAll('[data-nav]');

            if (!sections.length || !navLinks.length) return;

            const observer = new IntersectionObserver(
                entries => {
                    entries.forEach(entry => {
                        if (!entry.isIntersecting) return;

                        const id = entry.target.id;

                        navLinks.forEach(link => {
                            link.classList.toggle(
                                'text-white',
                                link.dataset.nav === id
                            );

                            link.classList.toggle(
                                'text-slate-400',
                                link.dataset.nav !== id
                            );
                        });
                    });
                }, {
                    threshold: 0.45
                }
            );

            sections.forEach(section => observer.observe(section));
        });
    </script>
    </body>

    </html>
