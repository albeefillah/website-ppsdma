<?php

namespace App\Filament\Resources\Profile\StrukturOrganisasis\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;

class StrukturOrganisasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
             Section::make('Form Struktur Organisasi')
                ->schema([
                FileUpload::make('foto')
                    ->required()
                    ->columnSpanFull()
                    ->image()
                    ->disk('public')
                    ->directory('struktur_organisasi')
                    ->visibility('public')
                    ->placeholder('Upload  gambar struktur organisasi'),

                ])

            ]);
    }
}
