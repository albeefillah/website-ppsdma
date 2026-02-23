<?php

namespace App\Filament\Resources\Layanan\Pelatihans\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PelatihanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
