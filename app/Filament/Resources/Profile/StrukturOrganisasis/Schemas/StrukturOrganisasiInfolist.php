<?php

namespace App\Filament\Resources\Profile\StrukturOrganisasis\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Schemas\Schema;

class StrukturOrganisasiInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                ImageEntry::make('foto')
                    ->columnSpanFull()
                    ->defaultImageUrl(fn ($record) => $record->getOrganisasiUrl()),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
