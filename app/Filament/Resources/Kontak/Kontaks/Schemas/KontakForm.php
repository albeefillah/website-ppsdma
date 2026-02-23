<?php

namespace App\Filament\Resources\Kontak\Kontaks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KontakForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('Link_peta')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('whatsapp')
                    ->required(),
                TextInput::make('facebook')
                    ->required(),
                TextInput::make('instagram')
                    ->required(),
                TextInput::make('no_telp')
                    ->tel()
                    ->required(),
            ]);
    }
}
