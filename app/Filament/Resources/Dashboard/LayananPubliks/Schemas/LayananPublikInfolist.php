<?php

namespace App\Filament\Resources\Dashboard\LayananPubliks\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Guava\IconPicker\Forms\Components\IconPicker;


class LayananPublikInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                IconPicker::make('icon')
                    ->label('Icon'),
                TextEntry::make('judul'),
                TextEntry::make('caption'),
                ImageEntry::make('image')
                    ->placeholder('-'),
                TextEntry::make('konten')
                    ->columnSpanFull(),
                IconEntry::make('is_active')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
