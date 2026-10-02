<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Product;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Produk')
                    ->description('Silakan lengkapi informasi produk di bawah ini.')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Gambar Produk')
                            ->image()
                            ->required()
                            ->visibility('public')
                            ->directory('products')
                            ->maxSize(3048)
                            ->imageEditor()
                            ->disk('public')
                            ->automaticallyCropImagesToAspectRatio('4:3')
                            ->automaticallyResizeImagesMode('cover')
                            ->openable()
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->columnSpanFull(),
                        Grid::make()
                            ->schema([
                                TextInput::make('name')
                                    ->label('Nama Produk')
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
                            ])->columns(2),
                        Select::make('product_category_id')
                            ->label('Kategori Produk')
                            ->relationship(
                                name: 'category',
                                titleAttribute: 'name',
                                modifyQueryUsing: fn($query) => $query->where('is_active', true),
                            )
                            ->searchable()
                            ->preload()
                            ->required(),
                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->columnSpanFull(),

                        ToggleButtons::make('sort_order')
                            ->label('Urutan Produk')
                            ->options([
                                '1' => 'Pertama',
                                '4' => 'Keempat',
                                '2' => 'Kedua',
                                '5' => 'Kelima',
                                '3' => 'Ketiga',
                                '6' => 'Keenam',
                            ])
                            ->columns(3)
                            ->columnSpanFull()
                            ->disableOptionWhen(function (string $value, ?Product $record): bool {
                                return Product::query()
                                    ->where('sort_order', $value)
                                    ->when(
                                        $record,
                                        fn($query) => $query->whereKeyNot($record->getKey())
                                    )
                                    ->exists();
                            }),

                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true),
                    ]),
                Section::make('Spesifikasi Produk')
                    ->description('Lengkapi spesifikasi Produk.')
                    ->schema([
                        Repeater::make('spesifikasi')
                            ->label('Tambah Spesifikasi Produk')
                            ->relationship()
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('label')
                                            ->label('Label'),
                                        TextInput::make('value')
                                            ->label('Value')
                                    ])
                            ])
                    ])
            ]);
    }
}
