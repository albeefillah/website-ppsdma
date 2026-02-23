<?php

namespace App\Filament\Resources\Profile\Sejarahs\Schemas;

use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\DateEntry;
use Filament\Infolists\Components\ImageEntry;


class SejarahInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextEntry::make('judul'),
            TextEntry::make('Tahun')
                ->label('Tahun')
                ->formatStateUsing(fn ($state) => \Carbon\Carbon::parse($state)->format('Y'))
                ->placeholder('-'),
            ImageEntry::make('image')
                ->placeholder('-'),
            TextEntry::make('deskripsi')
                ->label('Deskripsi')
                ->placeholder('-'),
            ]);
    }
}
