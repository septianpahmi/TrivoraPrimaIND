<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use App\Models\Portfolio;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Portofolio')
                    ->description('Silakan lengkapi informasi portofolio di bawah ini.')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Gambar Portofolio')
                            ->image()
                            ->required()
                            ->visibility('public')
                            ->directory('portofolios')
                            ->disk('public')
                            ->maxSize(3048)
                            ->imageEditor()
                            ->automaticallyCropImagesToAspectRatio('4:3')
                            ->automaticallyResizeImagesMode('cover')
                            ->openable()
                            ->required()
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                            ->columnSpanFull(),
                        Grid::make()
                            ->schema([
                                TextInput::make('title')
                                    ->label('Nama Portofolio')
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
                        Grid::make(2)
                            ->schema([
                                Select::make('category')
                                    ->label('Kategori')
                                    ->required()
                                    ->native(false)
                                    ->options([
                                        'industrial' => 'Industrial',
                                        'commercial' => 'Commercial',
                                        'retail' => 'Retail',
                                        'other' => 'Other',
                                    ])
                                    ->searchable(),
                                TextInput::make('client')
                                    ->label('Client')
                                    ->required()
                                    ->maxLength(255),
                            ]),
                        TextInput::make('location')
                            ->label('Lokasi')
                            ->required()
                            ->maxLength(255),

                        RichEditor::make('description')
                            ->label('Deskripsi')
                            ->toolbarButtons([
                                ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link'],
                                ['h2', 'h3'],
                                ['highlight'],
                                ['bulletList', 'orderedList'],
                                ['undo', 'redo'],
                            ])
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
                            ->disableOptionWhen(function (string $value, ?Portfolio $record): bool {
                                return Portfolio::query()
                                    ->where('sort_order', $value)
                                    ->when(
                                        $record,
                                        fn($query) => $query->whereKeyNot($record->getKey())
                                    )
                                    ->exists();
                            }),
                        Toggle::make('is_featured')
                            ->label('Tampilkan di Portofolio Unggulan')
                            ->default(false),
                        Toggle::make('is_active')
                            ->label('Status Aktif')
                            ->default(true),
                    ])->columnSpanFull()
            ]);
    }
}
