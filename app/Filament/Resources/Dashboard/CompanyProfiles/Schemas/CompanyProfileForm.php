<?php

namespace App\Filament\Resources\Dashboard\CompanyProfiles\Schemas;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Hidden;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;

class CompanyProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([

        TextInput::make('judul')
            ->label('Judul')
            ->required()
            ->live(onBlur: true)
            ->afterStateUpdated(fn ($state, callable $set) =>
                $set('slug', Str::slug($state))
            ),

        TextInput::make('video_url')
            ->label('Link Video Company Profile')
            ->url()
            ->placeholder('https://')
            ->helperText('Masukkan link Video')
            ->nullable(),

        RichEditor::make('konten')
            ->label('Konten')
            ->required()
            ->columnSpanFull(),
    ]);
    }
}
