<body class="bg-slate-950 text-white antialiased">

    {{-- PAGE LOADER --}}
    <div id="page-loader" class="trivora-loader fixed inset-0 z-[99999] flex items-center justify-center bg-slate-950">
        <div class="flex flex-col items-center">

            <img src="/img/logotrivora.svg" alt="Trivora Prima Indonesia"
                class="trivora-loader-logo h-12 w-auto object-contain sm:h-16 sm:w-auto">

            <div class="mt-5 h-px w-10 overflow-hidden bg-white/10">
                <div class="h-full w-full origin-left scale-x-0 bg-blue-500 animate-pulse"></div>
            </div>

        </div>
    </div>

    <script>
        window.addEventListener('load', function() {
            const loader = document.getElementById('page-loader');

            if (!loader) return;

            setTimeout(() => {
                loader.classList.add('is-hidden');

                setTimeout(() => {
                    loader.remove();
                }, 500);

            }, 450);
        });
    </script>

    {{-- NAVBAR --}}
    <header x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 30"
        :class="scrolled ? 'bg-slate-950/90 backdrop-blur-xl border-b border-white/10' : 'bg-slate-950/50 backdrop-blur-lg'"
        class="fixed inset-x-0 top-0 z-50 transition-all duration-300">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="flex h-[76px] items-center justify-between">
                <a href="#home" class="group flex items-center gap-3">
                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-xl border border-blue-400/20 bg-blue-600/10 shadow-lg shadow-blue-600/10 transition-all duration-300 group-hover:bg-blue-600 group-hover:shadow-blue-600/20">
                        <img src="/img/logotrivora.svg" class="w-6 object-contain" alt="Trivora Prima Indonesia"
                            srcset="">
                    </div>
                    <div>
                        <div class="text-sm font-bold tracking-wide">TRIVORA</div>
                        <div class="text-[10px] tracking-[0.25em] text-blue-300">PRIMA INDONESIA</div>
                    </div>
                </a>

                <nav class="hidden items-center gap-8 lg:flex">
                    <a href="#home" data-nav="home"
                        class="nav-link text-sm font-medium text-white transition hover:text-blue-400">Beranda</a>
                    <a href="#about" data-nav="about"
                        class="nav-link text-sm font-medium text-slate-300 transition hover:text-blue-400">Tentang
                        Kami</a>
                    <a href="#products" data-nav="products"
                        class="nav-link text-sm font-medium text-slate-300 transition hover:text-blue-400">Produk</a>
                    <a href="#services" data-nav="services"
                        class="nav-link text-sm font-medium text-slate-300 transition hover:text-blue-400">Layanan</a>
                    <a href="#portfolio" data-nav="portfolio"
                        class="nav-link text-sm font-medium text-slate-300 transition hover:text-blue-400">Portfolio</a>
                </nav>

                <a href="#contact"
                    class="hidden items-center gap-2 rounded-full bg-blue-600 px-6 py-3 text-sm font-semibold text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-blue-500 hover:shadow-lg hover:shadow-blue-600/30 lg:inline-flex">
                    Hubungi Kami

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                    </svg>
                </a>

                <button @click="open = !open" aria-label="Toggle navigation"
                    class="rounded-lg border border-white/10 p-2 lg:hidden">
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div x-show="open" x-transition class="border-t border-white/10 py-5 lg:hidden">
                <div class="flex flex-col gap-5">
                    <a href="#home" @click="open = false" class="text-sm text-white">Beranda</a>
                    <a href="#about" @click="open = false" class="text-sm text-slate-300">Tentang Kami</a>
                    <a href="#products" @click="open = false" class="text-sm text-slate-300">Produk</a>
                    <a href="#services" @click="open = false" class="text-sm text-slate-300">Layanan</a>
                    <a href="#portfolio" @click="open = false" class="text-sm text-slate-300">Portfolio</a>
                    <a href="#contact" @click="open = false"
                        class="mt-2 w-full rounded-full bg-blue-600 px-5 py-3 text-center text-sm font-semibold">Hubungi
                        Kami</a>
                </div>
            </div>
        </div>
    </header>