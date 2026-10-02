<?php

namespace App\Filament\Resources\Portfolios\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class PortfoliosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->disk('public')
                    ->circular()
                    ->imageSize(50)
                    ->toggleable(),
                TextColumn::make('title')
                    ->label('Nama Portofolio')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('category')
                    ->label('Kategori')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('client')
                    ->label('Klien')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('location')
                    ->label('Lokasi')
                    ->searchable()
                    ->sortable()
                    ->toggleable(),
                BooleanColumn::make('is_featured')
                    ->label('Unggulan')
                    ->sortable()
                    ->toggleable(),
                BooleanColumn::make('is_active')
                    ->label('Aktif')
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(),
            ])
            ->filters([
                // TrashedFilter::make(),
                SelectFilter::make('category')
                    ->label('Kategori')
                    ->options([
                        'web' => 'Web',
                        'mobile' => 'Mobile',
                        'desktop' => 'Desktop',
                    ])
                    ->multiple()
                    ->searchable(),
                SelectFilter::make('is_featured')
                    ->label('Unggulan')
                    ->options([
                        1 => 'Ya',
                        0 => 'Tidak',
                    ])
                    ->multiple()
                    ->searchable(),
                SelectFilter::make('is_active')
                    ->label('Aktif')
                    ->options([
                        1 => 'Ya',
                        0 => 'Tidak',
                    ])
                    ->multiple()
                    ->searchable(),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
