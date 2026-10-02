<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class RecentProducts extends TableWidget
{
    protected static ?string $heading = 'Produk Terbaru';

    protected int|string|array $columnSpan = 1;
    protected static ?int $sort = 3;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Product::query()
                    ->with('category')
                    ->latest()
            )
            ->paginated(false)
            ->columns([
                TextColumn::make('name')
                    ->label('Produk')
                    ->searchable()
                    ->limit(30),

                TextColumn::make('category.name')
                    ->label('Kategori')
                    ->placeholder('-'),

                TextColumn::make('is_active')
                    ->label('Status')
                    ->badge()
                    ->formatStateUsing(
                        fn(bool $state): string => $state ? 'Aktif' : 'Nonaktif'
                    )
                    ->color(
                        fn(bool $state): string => $state ? 'success' : 'gray'
                    ),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
