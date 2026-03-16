<?php

namespace App\Filament\Resources\Dashboard\Roadmaps\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class RoadmapForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Form Roadmap')
                ->schema([
                FileUpload::make('image')
                    ->required()
                    ->columnSpanFull()
                    ->image()
                    ->disk('public')
                    ->directory('roadmaps')
                    ->visibility('public')
                    ->placeholder('Upload Roadmap Image'),
                ])
                ->columnSpanFull()
            ]);
    }
}
