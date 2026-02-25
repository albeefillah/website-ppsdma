<?php

namespace App\Filament\Resources\Media\Beritas\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Schema;

class BeritaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('judul_berita'),
                ImageEntry::make('foto')
                    ->columnSpanFull(),
                TextEntry::make('konten_berita')
                    ->columnSpanFull()
                    ->html(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
