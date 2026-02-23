<?php

namespace App\Filament\Resources\Dashboard\Roadmaps\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class RoadmapForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->image(),
            ]);
    }
}
