{{-- CONTACT US --}}
<section id="contact" data-reveal class="relative overflow-hidden bg-slate-950 py-24 text-white sm:py-28 lg:py-32">

    {{-- Background --}}
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute -left-40 top-1/4 h-[500px] w-[500px] rounded-full bg-blue-600/10 blur-3xl"></div>
        <div class="absolute -right-40 bottom-0 h-[500px] w-[500px] rounded-full bg-cyan-500/10 blur-3xl">
        </div>
    </div>

    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">

        {{-- Heading --}}
        <div class="max-w-3xl">

            <div class="mb-5 flex items-center gap-3">
                <span class="h-px w-10 bg-blue-500"></span>

                <h2 class="text-sm font-semibold uppercase tracking-[0.2em] text-blue-400">
                    Hubungi Kami
                </h2>
            </div>

            <h3 class="text-4xl font-bold tracking-tight sm:text-5xl lg:text-6xl">
                Mari Terhubung dengan
                <span class="text-blue-400">PT Trivora Prima Indonesia.</span>
            </h3>

            <p class="mt-6 max-w-2xl text-base leading-8 text-slate-400 sm:text-lg">
                Memiliki kebutuhan produk atau ingin mengetahui lebih lanjut mengenai
                layanan kami? Hubungi tim PT Trivora Prima Indonesia untuk
                mendiskusikan kebutuhan bisnis Anda.
            </p>

        </div>


        {{-- Contact + Form --}}
        <div class="mt-14 grid gap-6 lg:grid-cols-5 lg:gap-8">

            {{-- Contact Information --}}
            <div class="lg:col-span-2">

                <div class="h-full rounded-[2rem] border border-white/10 bg-white/[0.04] p-7 sm:p-8">

                    <div>
                        <h2 class="text-xs font-semibold uppercase tracking-[0.2em] text-blue-400">
                            Informasi Kontak
                            </p>

                            <h3 class="mt-3 text-2xl font-bold text-white">
                                Mari berdiskusi dengan tim kami.
                            </h3>

                            <p class="mt-3 text-sm leading-7 text-slate-400">
                                Sampaikan kebutuhan produk, pengadaan, atau kerja sama
                                bisnis Anda kepada kami.
                            </p>
                    </div>


                    {{-- Contact Items --}}
                    <div class="mt-8 space-y-5">

                        {{-- Email --}}
                        <a href="mailto:{{ $profile->contact_email }}"
                            class="group flex gap-4 rounded-2xl border border-white/5 bg-white/[0.03] p-4 transition-all duration-300 hover:border-blue-500/20 hover:bg-blue-500/[0.06]">
                            <span
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-500/10 text-blue-400 transition-colors group-hover:bg-blue-600 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 6.75A2.25 2.25 0 015.25 4.5h13.5A2.25 2.25 0 0121 6.75v10.5a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 17.25V6.75z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.5 6l8.5 6.5L20.5 6" />
                                </svg>
                            </span>

                            <span class="min-w-0">
                                <span class="block text-xs font-medium uppercase tracking-wider text-slate-500">
                                    Email
                                </span>

                                <span class="mt-1 block break-all text-sm font-medium text-white">
                                    {{ $profile->contact_email }}
                                </span>
                            </span>
                        </a>


                        {{-- Phone --}}
                        <a href="tel:+6287749043084"
                            class="group flex gap-4 rounded-2xl border border-white/5 bg-white/[0.03] p-4 transition-all duration-300 hover:border-blue-500/20 hover:bg-blue-500/[0.06]">
                            <span
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-500/10 text-blue-400 transition-colors group-hover:bg-blue-600 group-hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1.5 1.5 0 011.53-.36 9.9 9.9 0 003.1.5 1.5 1.5 0 011.5 1.5v3.5a1.5 1.5 0 01-1.64 1.49A17.5 17.5 0 013.5 5.64 1.5 1.5 0 014.99 4h3.5A1.5 1.5 0 0110 5.5a9.9 9.9 0 00.5 3.1 1.5 1.5 0 01-.36 1.53l-3.52 0.66z" />
                                </svg>
                            </span>

                            <span>
                                <span class="block text-xs font-medium uppercase tracking-wider text-slate-500">
                                    Telepon
                                </span>

                                <span class="mt-1 block text-sm font-medium text-white">
                                    {{ $profile->contact_phone }}
                                </span>
                            </span>
                        </a>


                        {{-- Office --}}
                        <div class="flex gap-4 rounded-2xl border border-white/5 bg-white/[0.03] p-4">

                            <span
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-500/10 text-blue-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 21h18M5 21V5.5L12 3l7 2.5V21M9 21v-4h6v4M8 8h1m6 0h1m-8 4h1m6 0h1" />
                                </svg>
                            </span>

                            <span>
                                <span class="block text-xs font-medium uppercase tracking-wider text-slate-500">
                                    Kantor
                                </span>

                                <span class="mt-1 block text-sm leading-6 text-white">
                                    {{ $profile->contact_address }}
                                </span>
                            </span>

                        </div>


                        {{-- Business Hours --}}
                        <div class="flex gap-4 rounded-2xl border border-white/5 bg-white/[0.03] p-4">

                            <span
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-500/10 text-blue-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                                    <circle cx="12" cy="12" r="8.5" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5l3.5 2" />
                                </svg>
                            </span>

                            <span>
                                <span class="block text-xs font-medium uppercase tracking-wider text-slate-500">
                                    Jam Operasional
                                </span>

                                <span class="mt-1 block text-sm leading-6 text-white">
                                    {{ $profile->contact_hours }}
                                </span>
                            </span>

                        </div>

                    </div>


                    {{-- WhatsApp --}}
                    <a href="https://wa.me/{{ $profile->contact_whatsapp }}" target="_blank" rel="noopener"
                        class="group mt-6 flex items-center justify-between rounded-2xl bg-blue-600 p-5 transition-all duration-300 hover:-translate-y-1 hover:bg-blue-500 hover:shadow-xl hover:shadow-blue-950/30">
                        <span>
                            <span class="block text-sm font-bold text-white">
                                Hubungi via WhatsApp
                            </span>

                            <span class="mt-1 block text-xs text-blue-100">
                                Respon langsung dari tim kami
                            </span>
                        </span>

                        <span
                            class="flex h-10 w-10 items-center justify-center rounded-full bg-white/10 transition-transform duration-300 group-hover:translate-x-1">

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.7">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>

                        </span>
                    </a>

                </div>

            </div>


            {{-- Contact Form --}}
            <div class="lg:col-span-3">

                <div class="rounded-[2rem] bg-white p-7 text-slate-950 shadow-2xl shadow-black/20 sm:p-9 lg:p-10">

                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-blue-600">
                            Kirim Pesan
                        </p>

                        <h3 class="mt-3 text-2xl font-bold tracking-tight sm:text-3xl">
                            Beritahu Kami tentang Kebutuhan Anda
                        </h3>

                        <p class="mt-3 text-sm leading-7 text-slate-500">
                            Isi formulir berikut dan tim kami dapat menghubungi Anda
                            untuk membahas kebutuhan lebih lanjut.
                        </p>
                    </div>

                    @if (session('success'))
                        <div
                            class="mb-6 rounded-xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-700 mt-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="mb-6 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                            <p class="font-semibold">
                                Pesan belum dapat dikirim.
                            </p>

                            <ul class="mt-2 list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('contact.send') }}" method="POST" class="mt-8 space-y-5">
                        @csrf
                        <div aria-hidden="true"
                            style="position:absolute; left:-9999px; width:1px; height:1px; overflow:hidden;">
                            <label for="website">
                                Website
                            </label>

                            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
                        </div>
                        <div class="grid gap-5 sm:grid-cols-2">

                            <div>
                                <label class="mb-2 block text-sm font-medium text-slate-700">
                                    Nama Lengkap<span class="text-red-500">*</span>
                                </label>

                                <input type="text" required name="name" placeholder="Nama Anda"
                                    value="{{ old('name') }}"
                                    class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm text-slate-900 outline-none transition-all placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10">
                            </div>

                            <div>
                                <label class="mb-2 block text-sm font-medium text-slate-700">
                                    Perusahaan
                                </label>

                                <input type="text" name="company" placeholder="Nama perusahaan"
                                    value="{{ old('company') }}"
                                    class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm text-slate-900 outline-none transition-all placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10">
                            </div>

                        </div>


                        <div class="grid gap-5 sm:grid-cols-2">

                            <div>
                                <label class="mb-2 block text-sm font-medium text-slate-700">
                                    Alamat Email<span class="text-red-500">*</span>
                                </label>

                                <input type="email" required name="email" placeholder="nama@email.com"
                                    value="{{ old('email') }}"
                                    class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm text-slate-900 outline-none transition-all placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10">
                            </div>

                            <div>
                                <label class="mb-2 block text-sm font-medium text-slate-700">
                                    Nomor Telepon/ Whatsapp<span class="text-red-500">*</span>
                                </label>

                                <input type="tel" required name="phone" placeholder="+62"
                                    value="{{ old('phone') }}"
                                    class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm text-slate-900 outline-none transition-all placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10">
                            </div>

                        </div>


                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-700">
                                Subjek<span class="text-red-500">*</span>
                            </label>

                            <input type="text" required name="subject"
                                placeholder="Kebutuhan produk / kerja sama / lainnya" value="{{ old('subject') }}"
                                class="w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm text-slate-900 outline-none transition-all placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10">
                        </div>


                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-700">
                                Pesan<span class="text-red-500">*</span>
                            </label>

                            <textarea name="message" required rows="5" placeholder="Ceritakan kebutuhan Anda..."
                                class="w-full resize-none rounded-xl border border-slate-200 bg-slate-50 px-4 py-3.5 text-sm text-slate-900 outline-none transition-all placeholder:text-slate-400 focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-500/10">{{ old('message') }}</textarea>
                        </div>


                        <button type="submit"
                            class="group flex w-full items-center justify-center gap-3 rounded-xl bg-blue-600 px-6 py-4 text-sm font-semibold text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-blue-500 hover:shadow-lg hover:shadow-blue-600/20">
                            Kirim Pesan

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-4 w-4 transition-transform duration-300 group-hover:translate-x-1"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                            </svg>
                        </button>

                    </form>

                </div>

            </div>

        </div>


        {{-- Map --}}
        <div class="mt-8 overflow-hidden rounded-[2rem] border border-white/10 bg-white/[0.03]">

            <div
                class="flex flex-col gap-3 border-b border-white/10 px-6 py-5 sm:flex-row sm:items-center sm:justify-between sm:px-7">

                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-blue-400">
                        Lokasi Kami
                    </p>

                    <h3 class="mt-1 text-lg font-semibold text-white">
                        Temukan Lokasi PT Trivora Prima Indonesia
                    </h3>
                </div>

                <span
                    class="inline-flex w-fit items-center gap-2 rounded-full border border-white/10 bg-white/[0.04] px-3 py-1.5 text-xs text-slate-400">
                    <span class="h-1.5 w-1.5 rounded-full bg-blue-400"></span>
                    Serang Baru, Bekasi
                </span>

            </div>

            <div class="aspect-[16/8] min-h-[300px] bg-slate-900 sm:aspect-[16/6]">

                <iframe title="Lokasi PT Trivora Prima Indonesia" src="{{ $profile->contact_maps_url }}"
                    class="h-full w-full border-0 grayscale-[15%]" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>

            </div>

        </div>

    </div>
</section>
