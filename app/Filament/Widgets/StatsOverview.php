<?php

namespace App\Filament\Widgets;

use App\Models\Portfolio;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Service;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make(
                'Total Produk',
                Product::query()->where('is_active', true)->count()
            ),
            Stat::make(
                'Kategori Produk',
                ProductCategory::query()->where('is_active', true)->count()
            ),

            Stat::make(
                'Layanan',
                Service::query()->where('is_active', true)->count()
            ),

            Stat::make(
                'Portfolio',
                Portfolio::query()->where('is_active', true)->count()
            )
        ];
    }
}
