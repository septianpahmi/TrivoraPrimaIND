<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use Filament\Widgets\ChartWidget;

class ProductCategoryChart extends ChartWidget
{
    protected ?string $heading = 'Produk Berdasarkan Kategori';

    protected ?string $description = 'Distribusi produk aktif berdasarkan kategori.';

    protected int|string|array $columnSpan = 1;
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $products = Product::query()
            ->where('is_active', true)
            ->with('category')
            ->get()
            ->groupBy(
                fn($product) => $product->category?->name ?? 'Tanpa Kategori'
            );

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Produk',
                    'data' => $products->map->count()->values()->toArray(),
                ],
            ],
            'labels' => $products->keys()->values()->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
