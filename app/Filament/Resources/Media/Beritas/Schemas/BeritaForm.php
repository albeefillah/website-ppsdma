<?php

namespace App\Filament\Resources\Media\Beritas\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Image;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class BeritaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                 Section::make('Form Banner')
                ->schema([
                Textarea::make('judul_berita')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('foto')
                    ->required()
                    ->columnSpanFull()
                    ->image()
                    ->disk('public')
                    ->directory('beritas')
                    ->visibility('public')
                    ->placeholder('Upload berita image'),
                RichEditor::make('konten_berita')
                    ->required()
                    ->columnSpanFull(),
                ])
                 ->columnSpanFull()
            ]);
    }
}
