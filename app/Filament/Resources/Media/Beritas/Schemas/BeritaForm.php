<?php

namespace App\Filament\Resources\Media\Beritas\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Image;
use Filament\Schemas\Schema;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('judul_berita')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('foto')
                    ->required(),
                RichEditor::make('konten_berita')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
