<?php

namespace App\Filament\Resources\Profile\TugasFungsis\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TugasFungsiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('tugas')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('fungsi')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
