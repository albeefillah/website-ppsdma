<?php

namespace App\Filament\Resources\Profile\StrukturOrganisasis\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StrukturOrganisasiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('foto')
                    ->required(),
            ]);
    }
}
