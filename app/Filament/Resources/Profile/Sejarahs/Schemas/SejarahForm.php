<?php

namespace App\Filament\Resources\Profile\Sejarahs\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SejarahForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                DatePicker::make('Tahun')
                        ->label('Tahun')
                        ->displayFormat('Y')
                        ->required(),
                FileUpload::make('image')
                        ->label('Gambar')
                        ->image()
                        ->columnSpanFull()
                        ->disk('public')
                        ->directory('sejarahs')
                        ->visibility('public')
                        ->placeholder('Upload gambar sejarah'),
                RichEditor::make('Deskripsi')
                    ->columnSpanFull()
                    ->required(),
            ]);
    }
}
