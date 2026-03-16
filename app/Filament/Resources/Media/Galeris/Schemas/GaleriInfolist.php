<?php

namespace App\Filament\Resources\Media\Galeris\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Components\Section;

class GaleriInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('judul_galeri')
                    ->columnSpanFull(),
                ImageEntry::make('foto')    
                    ->columnSpanFull()
                    ->defaultImageUrl(fn ($record) => $record->getGaleriUrl())
                    ->extraImgAttributes([
                        'class' => 'rounded-xl shadow-md object-cover'
                    ])
                    ->width(900)
                    ->height(500),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
