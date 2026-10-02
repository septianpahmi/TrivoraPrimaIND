<x-filament-widgets::widget>
    <x-filament::section heading="Status Website" description="Kelengkapan konten website">
        @php
            $status = $this->getStatus();
        @endphp

        <div class="space-y-3">
            @foreach ($status as $label => $active)
                <div class="flex items-center justify-between">
                    <span class="text-sm font-medium text-gray-700 dark:text-gray-200">
                        {{ ucfirst($label) }}
                    </span>

                    @if ($active)
                        <span class="inline-flex items-center gap-1.5 text-sm font-medium text-success-600">
                            <span class="h-2 w-2 rounded-full bg-success-500"></span>
                            Lengkap
                        </span>
                    @else
                        <span class="inline-flex items-center gap-1.5 text-sm font-medium text-warning-600">
                            <span class="h-2 w-2 rounded-full bg-warning-500"></span>
                            Belum
                        </span>
                    @endif
                </div>
            @endforeach
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
