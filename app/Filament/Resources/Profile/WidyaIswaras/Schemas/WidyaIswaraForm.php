<?php

namespace App\Filament\Resources\Profile\WidyaIswaras\Schemas;


use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class WidyaIswaraForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('nama')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('foto')
                    ->required(),
                Textarea::make('jabatan')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
