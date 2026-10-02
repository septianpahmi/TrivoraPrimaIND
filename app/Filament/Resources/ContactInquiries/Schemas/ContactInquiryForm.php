<?php

namespace App\Filament\Resources\ContactInquiries\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ContactInquiryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Permintaan Surat')
                    ->schema([
                        Grid::make(2)
                            ->schema([

                                TextInput::make('name')
                                    ->label('Nama')
                                    ->required(),
                                TextInput::make('company')
                                    ->label('Perusahaan'),
                            ]),
                        Grid::make(2)
                            ->schema([
                                TextInput::make('email')
                                    ->label('Email')
                                    ->email()
                                    ->required(),

                                TextInput::make('phone')
                                    ->label('Nomor Telepon'),
                            ]),
                        TextInput::make('subject')
                            ->label('Subject')
                            ->required(),


                        Textarea::make('message')
                            ->label('Pesan')
                            ->rows(6)
                            ->columnSpanFull(),
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'new' => 'New',
                                'read' => 'Read',
                                'replied' => 'Replied',
                            ])
                            ->default('new')
                            ->required(),
                    ])->columnSpanFull()
            ]);
    }
}
