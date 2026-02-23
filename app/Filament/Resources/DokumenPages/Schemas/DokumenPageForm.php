<?php

namespace App\Filament\Resources\DokumenPages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class DokumenPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('judul')
                ->required()
                ->maxLength(255),

            TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true),

            Select::make('layout_type')
                ->options([
                    'grid' => 'Grid',
                    'tab' => 'Tab',
                ])
                ->required(),

            Toggle::make('is_active')
                ->default(true),
            ]);
    }
}
