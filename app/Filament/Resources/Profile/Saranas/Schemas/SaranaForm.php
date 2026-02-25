<?php

namespace App\Filament\Resources\Profile\Saranas\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
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
                FileUpload::make('foto')
                    ->required(),
            ]);
    }
}
