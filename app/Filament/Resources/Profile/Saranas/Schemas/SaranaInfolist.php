<?php

namespace App\Filament\Resources\Profile\Saranas\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Image;
use Filament\Schemas\Schema;
use Filament\Infolists\Components\ImageEntry;

class SaranaInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('sarana')
                    ->columnSpanFull(),
                ImageEntry::make('foto'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
