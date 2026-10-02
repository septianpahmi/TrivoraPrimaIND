<?php

namespace App\Filament\Pages;

use App\Models\WebsiteSetting;
use BackedEnum;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class WebsiteSettings extends Page
{
    protected string $view = 'filament.pages.website-settings';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string|UnitEnum|null $navigationGroup = 'Content';

    protected static ?string $navigationLabel = 'Website Setting';

    protected static ?string $title = 'Website Setting';
    // protected static bool $shouldRegisterNavigation = false;
    public ?array $data = [];

    public function mount(): void
    {
        $setting = WebsiteSetting::first();

        $this->form->fill(
            $setting?->toArray() ?? []
        );
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Wizard::make([
                    Step::make('Hero Section')
                        ->icon(Heroicon::OutlinedSparkles)
                        ->schema([
                            TextInput::make('hero_badge')
                                ->label('Badge')
                                ->placeholder('GENERAL TRADING & SUPPLY CHAIN')
                                ->maxLength(255)
                                ->required()
                                ->columnSpanFull(),
                            Grid::make(2)
                                ->schema([

                                    TextInput::make('hero_title')
                                        ->label('Judul Utama')
                                        ->placeholder('Solusi Supply Chain untuk')
                                        ->maxLength(255)
                                        ->required(),

                                    TextInput::make('hero_highlight')
                                        ->label('Highlight Judul')
                                        ->placeholder('Kebutuhan Bisnis Anda.')
                                        ->maxLength(255)
                                        ->required(),
                                ])->columnSpanFull(),
                            Textarea::make('hero_description')
                                ->label('Deskripsi')
                                ->placeholder('Masukkan deskripsi singkat untuk Hero Section...')
                                ->rows(4)
                                ->required()
                                ->columnSpanFull(),
                        ])
                        ->columns(2),

                    Step::make('Tentang Kami')
                        ->icon(Heroicon::OutlinedBuildingOffice2)
                        ->schema([
                            Section::make('Informasi Perusahaan')
                                ->schema([
                                    TextInput::make('about_badge')
                                        ->label('Badge')
                                        ->placeholder('TENTANG KAMI')
                                        ->maxLength(255)
                                        ->columnSpanFull(),
                                    TextInput::make('about_title')
                                        ->label('Judul Utama')
                                        ->placeholder('Partner Andal untuk')
                                        ->maxLength(255),
                                    TextInput::make('about_highlight')
                                        ->label('Highlight Judul')
                                        ->placeholder('Kebutuhan Bisnis Anda.')
                                        ->maxLength(255),
                                    TextInput::make('about_founded_year')
                                        ->label('Tahun Berdiri')
                                        ->numeric()
                                        ->minValue(1900)
                                        ->maxValue(2100),
                                    Textarea::make('about_description')
                                        ->label('Deskripsi Singkat')
                                        ->columnSpanFull(),
                                    Textarea::make('about_profile')
                                        ->label('Profil Perusahaan')
                                        ->required()
                                        ->columnSpanFull(),
                                ]),
                            Section::make('Visi & Misi')
                                ->schema([
                                    TextInput::make('about_vision_title')
                                        ->label('Judul Visi')
                                        ->default('Visi'),

                                    RichEditor::make('about_vision')
                                        ->label('Visi')
                                        ->toolbarButtons([
                                            'bold',
                                            'italic',
                                            'bulletList',
                                        ])
                                        ->columnSpanFull(),

                                    TextInput::make('about_mission_title')
                                        ->label('Judul Misi')
                                        ->default('Misi'),

                                    RichEditor::make('about_mission')
                                        ->label('Misi')
                                        ->toolbarButtons([
                                            'bold',
                                            'italic',
                                            'bulletList',
                                            'orderedList',
                                        ])
                                        ->columnSpanFull(),
                                ])
                        ])
                        ->columns(2),

                    Step::make('Kontak')
                        ->icon(Heroicon::OutlinedPhone)
                        ->schema([
                            TextInput::make('contact_email')
                                ->label('Email')
                                ->email()
                                ->placeholder('marketing@trivora.co.id'),

                            TextInput::make('contact_phone')
                                ->label('Nomor Telepon')
                                ->placeholder('+62 877 4904 3084'),

                            TextInput::make('contact_whatsapp')
                                ->label('WhatsApp')
                                ->placeholder('6287749043084'),

                            TextInput::make('contact_hours')
                                ->label('Jam Operasional')
                                ->placeholder('Senin - Jumat, 08:00 - 17:00 WIB'),

                            Textarea::make('contact_address')
                                ->label('Alamat')
                                ->rows(4)
                                ->columnSpanFull(),

                            Textarea::make('contact_maps_url')
                                ->label('Google Maps URL')
                                ->placeholder('https://www.google.com/maps?q=...')
                                ->rows(2)
                                ->columnSpanFull(),

                            TextInput::make('social_linkedin')
                                ->label('LinkedIn')
                                ->url()
                                ->placeholder('https://linkedin.com/...')
                                ->columnSpanFull(),

                            TextInput::make('social_instagram')
                                ->label('Instagram')
                                ->url()
                                ->placeholder('https://instagram.com/...')
                                ->columnSpanFull(),

                            TextInput::make('social_facebook')
                                ->label('Facebook')
                                ->url()
                                ->placeholder('https://facebook.com/...')
                                ->columnSpanFull(),
                        ])
                        ->columns(2),
                ])
                    ->columnSpanFull()
                    ->skippable(),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        WebsiteSetting::updateOrCreate(
            ['id' => WebsiteSetting::query()->value('id')],
            $this->form->getState()
        );

        Notification::make()
            ->title('Informasi website berhasil diperbarui.')
            ->success()
            ->send();
    }
}
