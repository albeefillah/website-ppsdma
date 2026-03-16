<?php

namespace App\Filament\Resources\Dashboard\Banners\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Storage;
use Filament\Schemas\Components\Section;

class BannerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                 Section::make('View Banner Details')
                ->schema([
                ImageEntry::make('image')
                    ->columnSpanFull()
                     ->defaultImageUrl(fn ($record) => $record->getimageUrl())
                    ->extraImgAttributes([
                        'class' => 'rounded-xl shadow-md object-cover'
                    ])
                    ->width(900)
                    ->height(500),
                TextEntry::make('list')
                    ->numeric(),
                IconEntry::make('is_active')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                 ])
        ->columnSpanFull()
            ]);
    }
}
