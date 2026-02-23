<?php

namespace App\Filament\Resources\Layanan\Pendidikans\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PendidikanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                RichEditor::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
