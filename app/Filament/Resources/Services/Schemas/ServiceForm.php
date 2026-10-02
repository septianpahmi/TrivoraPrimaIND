<?php

namespace App\Filament\Resources\Services\Schemas;

use App\Models\Service;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Layanan')
                    ->description('Silakan lengkapi informasi layanan di bawah ini.')
                    ->schema([
                        Select::make('icon')
                            ->label('Icon')
                            ->options([
                                'building-office' => '<div class="flex items-center gap-3"><span class="text-lg">🏢</span><span>Building Office</span></div>',
                                'cube' => '<div class="flex items-center gap-3"><span class="text-lg">📦</span><span>Cube</span></div>',
                                'truck' => '<div class="flex items-center gap-3"><span class="text-lg">🚚</span><span>Truck</span></div>',
                                'globe' => '<div class="flex items-center gap-3"><span class="text-lg">🌐</span><span>Globe</span></div>',
                                'chart-pie' => '<div class="flex items-center gap-3"><span class="text-lg">📊</span><span>Chart Pie</span></div>',
                                'light-bulb' => '<div class="flex items-center gap-3"><span class="text-lg">💡</span><span>Light Bulb</span></div>',
                                'puzzle-piece' => '<div class="flex items-center gap-3"><span class="text-lg">🧩</span><span>Puzzle Piece</span></div>',
                                'shield-check' => '<div class="flex items-center gap-3"><span class="text-lg">🛡️</span><span>Shield Check</span></div>',
                                'user-group' => '<div class="flex items-center gap-3"><span class="text-lg">👥</span><span>User Group</span></div>',
                                'wrench' => '<div class="flex items-center gap-3"><span class="text-lg">🔧</span><span>Wrench</span></div>',
                                'briefcase' => '<div class="flex items-center gap-3"><span class="text-lg">💼</span><span>Briefcase</span></div>',
                                'cog' => '<div class="flex items-center gap-3"><span class="text-lg">⚙️</span><span>Cog</span></div>',
                                'archive-box' => '<div class="flex items-center gap-3"><span class="text-lg">🗃️</span><span>Archive Box</span></div>',
                                'shopping-bag' => '<div class="flex items-center gap-3"><span class="text-lg">🛍️</span><span>Shopping Bag</span></div>',
                                'clipboard-document' => '<div class="flex items-center gap-3"><span class="text-lg">📋</span><span>Clipboard Document</span></div>'

                            ])
                            ->allowHtml()
                            ->searchable()
                            ->required(),
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Nama Layanan')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function ($state, callable $set) {
                                        $set('slug', \Illuminate\Support\Str::slug($state));
                                    }),

                                TextInput::make('slug')
                                    ->label('Slug')
                                    ->required()
                                    ->live(onBlur: true)
                                    ->readonly()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255),
                            ]),
                        Textarea::make('description')
                            ->label('Deskripsi Layanan')
                            ->rows(6)
                            ->columnSpanFull(),
                        ToggleButtons::make('sort_order')
                            ->label('Urutan Produk')
                            ->options([
                                '1' => 'Pertama',
                                '4' => 'Keempat',
                                '2' => 'Kedua',
                                '3' => 'Ketiga',
                            ])
                            ->columns(3)
                            ->columnSpanFull()
                            ->disableOptionWhen(function (string $value, ?Service $record): bool {
                                return Service::query()
                                    ->where('sort_order', $value)
                                    ->when(
                                        $record,
                                        fn($query) => $query->whereKeyNot($record->getKey())
                                    )
                                    ->exists();
                            }),
                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->default(true),

                    ])->columnSpanFull(),
            ]);
    }
}
