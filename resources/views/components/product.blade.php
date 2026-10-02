{{-- PRODUCTS --}}
<section id="products" data-reveal class="relative overflow-hidden bg-slate-950 py-24 text-white lg:py-32">
    <div class="absolute -left-32 top-10 h-96 w-96 rounded-full bg-blue-600/10 blur-3xl"></div>
    <div class="absolute -right-32 bottom-0 h-96 w-96 rounded-full bg-cyan-500/10 blur-3xl"></div>
    <div class="relative mx-auto w-full max-w-[1400px] px-6 lg:px-10">
        <div class="max-w-3xl">
            <div class="mb-5 flex items-center gap-3"><span class="h-px w-10 bg-blue-500"></span>
                <h2 class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-400">Produk Kami</h2>
            </div>
            <h3 class="text-4xl font-bold tracking-tight sm:text-5xl">Beragam Produk untuk <span
                    class="text-blue-500">Berbagai Kebutuhan.</span></h3>
            <p class="mt-5 max-w-2xl leading-8 text-slate-400">Kami menyediakan berbagai kebutuhan produk
                melalui jaringan pengadaan dan distribusi yang dirancang untuk memenuhi kebutuhan sektor
                industri, komersial, dan retail.</p>
        </div>


        <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($products as $product)
                <article
                    class="product-card shine group flex h-full flex-col overflow-hidden rounded-[1.75rem] border border-white/10 bg-white/[0.035] shadow-lg shadow-black/10 transition-all duration-500 hover:-translate-y-2 hover:border-blue-500/40 hover:bg-white/[0.06] hover:shadow-2xl hover:shadow-blue-950/30">
                    <div class="relative aspect-[16/10] overflow-hidden bg-slate-900">
                        <img src="storage/{{ $product->image }}" alt="{{ $product->name }}"
                            class="h-full w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent">
                        </div>
                        <span
                            class="absolute left-4 top-4 rounded-full border border-white/15 bg-slate-950/70 px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.16em] text-blue-200 backdrop-blur-md">
                            {{ $product->category->name }}
                        </span>
                    </div>
                    <div class="flex flex-1 flex-col p-6 sm:p-7">
                        <div class="flex items-start justify-between gap-4">
                            <h3 class="text-xl font-bold text-white sm:text-2xl">{{ $product->name }}</h3>
                            <span
                                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-blue-500/10 text-blue-400 ring-1 ring-blue-500/20 transition group-hover:bg-blue-600 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20 7 10 17l-5-5" />
                                </svg>
                            </span>
                        </div>
                        <p class="mt-3 text-sm leading-7 text-slate-400">
                            {!! Str::limit(strip_tags($product->description), 100) !!}
                        </p>
                        <a href="{{ route('product.detail', $product) }}"
                            class="mt-auto inline-flex items-center gap-2 pt-6 text-sm font-semibold text-blue-400 transition group-hover:gap-3 group-hover:text-blue-300">
                            Informasi Produk
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.7">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-6-6 6 6-6 6" />
                            </svg>
                        </a>
                    </div>
                </article>



            @empty
                <div class="col-span-full py-20 text-slate-400">
                    Belum ada produk yang tersedia.
                </div>
            @endforelse
        </div>
        <a href="{{ route('product') }}"
            class="mt-8 inline-flex items-center gap-2 rounded-full bg-blue-600 px-5 py-3 text-sm font-semibold text-white transition hover:bg-blue-500">
            Lihat Semua Produk

            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14" />
                <path d="m13 6 6 6-6 6" />
            </svg>
        </a>
    </div>
</section>
