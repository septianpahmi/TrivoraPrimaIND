@include('layouts.header')
@include('layouts.navbar')
<section class="bg-slate-950 py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="max-w-3xl">
            <span class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-400">
                Produk
            </span>

            <h1 class="mt-4 text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                Solusi Produk untuk
                <span class="text-blue-400">Kebutuhan Bisnis Anda.</span>
            </h1>

            <p class="mt-6 text-lg leading-8 text-slate-400">
                Jelajahi berbagai produk yang kami sediakan untuk kebutuhan
                industri, komersial, dan retail.
            </p>
        </div>

        <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

            @forelse ($products as $product)
                <a href="{{ route('product.detail', $product) }}"
                    class="group overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03] transition hover:-translate-y-1 hover:border-blue-500/40">

                    <div class="aspect-[4/3] overflow-hidden bg-slate-900">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                        @endif
                    </div>

                    <div class="p-6">

                        @if ($product->category)
                            <span class="text-xs font-semibold uppercase tracking-wider text-blue-400">
                                {{ $product->category->name }}
                            </span>
                        @endif

                        <h2 class="mt-3 text-xl font-semibold text-white">
                            {{ $product->name }}
                        </h2>

                        @if ($product->description)
                            <p class="mt-3 text-sm leading-6 text-slate-400">
                                {{ Str::limit($product->description, 100) }}
                            </p>
                        @endif

                        <span class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-blue-400">
                            Informasi Produk

                            <span class="transition group-hover:translate-x-1">
                                →
                            </span>
                        </span>

                    </div>

                </a>

            @empty

                <div class="col-span-full py-20 text-center text-slate-400">
                    Belum ada produk yang tersedia.
                </div>
            @endforelse

        </div>

    </div>
</section>
@include('layouts.footer')
