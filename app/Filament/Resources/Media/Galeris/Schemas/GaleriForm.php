<?php

namespace App\Filament\Resources\Media\Galeris\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class GaleriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('judul_galeri')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('foto')
                    ->required()
                    ->columnSpanFull()
                    ->image()
                    ->disk('public')
                    ->directory('galeris')
                    ->visibility('public')
                    ->placeholder('Upload galleri image')
                    ,

            ]);
    }
}
