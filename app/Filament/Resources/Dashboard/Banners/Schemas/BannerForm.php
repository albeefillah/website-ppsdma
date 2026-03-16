<?php

namespace App\Filament\Resources\Dashboard\Banners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;


class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                 Section::make('Form Banner')
                ->schema([
                FileUpload::make('image')
                    ->required()
                    ->columnSpanFull()
                    ->image()
                    ->disk('public')
                    ->directory('banners')
                    ->visibility('public')
                    ->placeholder('Upload banner image'),

                TextInput::make('list')
                    ->required()
                    ->numeric(),
                Toggle::make('is_active')
                    ->required(),
             ])
                 ->columnSpanFull()
            ]);
    }
}
