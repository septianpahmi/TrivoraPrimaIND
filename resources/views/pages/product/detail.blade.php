@include('layouts.header')
@include('layouts.navbar')
<section class="bg-slate-950 py-20 ">
    <div class="mx-auto max-w-7xl px-6 lg:px-8 mt-6">

        {{-- Breadcrumb --}}
        <div class="mb-10 text-sm text-slate-500">
            <a href="{{ route('product') }}" class="transition hover:text-white">
                Produk
            </a>

            <span class="mx-2">/</span>

            <span class="text-slate-300">
                {{ $product->name }}
            </span>
        </div>


        {{-- Product Header --}}
        <div class="grid gap-12 lg:grid-cols-2 lg:items-start">

            {{-- Image --}}
            <div class="overflow-hidden rounded-3xl border border-white/10 bg-slate-900">
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                        class="aspect-square w-full object-cover">
                @endif
            </div>


            {{-- Information --}}
            <div>

                @if ($product->category)
                    <span class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-400">
                        {{ $product->category->name }}
                    </span>
                @endif

                <h1 class="mt-4 text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                    {{ $product->name }}
                </h1>

                @if ($product->description)
                    <p class="mt-6 text-lg leading-8 text-slate-400">
                        {{ $product->description }}
                    </p>
                @endif

                <div class="mt-8 h-px bg-white/10"></div>

                @if ($product->spesifikasi->isNotEmpty())

                    <div class="max-w-5xl mt-8">

                        <div class="mb-6">
                            <span class="text-sm font-semibold uppercase tracking-[0.2em]">
                                Spesifikasi
                            </span>
                        </div>

                        <div class="overflow-hidden rounded-2xl border border-slate-200">

                            @foreach ($product->spesifikasi as $specification)
                                <div
                                    class="grid gap-2 border-b border-slate-200 px-6 py-5 last:border-b-0 sm:grid-cols-3">

                                    <div class="font-semibold ">
                                        {{ $specification->label }}
                                    </div>

                                    <div class=" sm:col-span-2">
                                        {{ $specification->value }}
                                    </div>

                                </div>
                            @endforeach

                        </div>

                    </div>
                @endif
                <div class="mt-10 flex w-full flex-col gap-3 sm:flex-row">
                    <a href="https://wa.me/{{ $profile->contact_whatsapp }}" target="_blank" rel="noopener"
                        class="inline-flex flex-1 items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-blue-500">
                        {{-- Chat Icon --}}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.625 9.75a.75.75 0 0 1 0-1.5h.008a.75.75 0 0 1 0 1.5h-.008Zm3.75 0a.75.75 0 0 1 0-1.5h.008a.75.75 0 0 1 0 1.5h-.008Zm3.75 0a.75.75 0 0 1 0-1.5h.008a.75.75 0 0 1 0 1.5h-.008Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 12a8.25 8.25 0 0 1-8.25 8.25c-1.383 0-2.685-.34-3.828-.94L4.5 20.25l.94-4.422A8.215 8.215 0 0 1 4.5 12a8.25 8.25 0 1 1 16.5 0Z" />
                        </svg>

                        Hubungi Kami
                    </a>

                    <a href="{{ route('home') }}#products"
                        class="inline-flex items-center justify-center rounded-xl border border-blue-600 px-6 py-3.5 text-sm font-semibold text-white transition hover:bg-blue-600">
                        Kembali
                    </a>
                </div>

            </div>

        </div>
</section>


{{-- Specifications --}}


@include('layouts.footer')
