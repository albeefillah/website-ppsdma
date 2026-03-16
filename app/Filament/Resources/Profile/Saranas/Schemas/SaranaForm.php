<?php

namespace App\Filament\Resources\Profile\Saranas\Schemas;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class SaranaForm
{
    public static function configure(Schema $schema): Schema
    {
    return $schema
        ->components([
            Textarea::make('sarana')
                ->required()
                ->columnSpanFull(),

            Repeater::make('images')
                ->relationship()
                ->schema([
                    FileUpload::make('image_path')
                        ->image()
                        ->disk('public')
                        ->directory('saranas')
                        ->visibility('public')
                        ->required(),

                    Toggle::make('is_cover')
                        ->label('Jadikan Cover'),
                ])
                ->columns(2)
                ->columnSpanFull()
                ->reorderable()
                ->minItems(1),
        ]);
    }
}