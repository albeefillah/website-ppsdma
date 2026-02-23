<?php

namespace App\Filament\Resources\Dashboard\LayananPubliks\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Guava\IconPicker\Forms\Components\IconPicker;


class LayananPublikForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                IconPicker::make('icon')
                    ->sets(['heroicons'])
                    ->label('Icon')
                    ->gridSearchResults(),            
                TextInput::make('judul')
                    ->required(),
                TextInput::make('caption')
                    ->required(),
                FileUpload::make('image')
                    ->image(),
                RichEditor::make('konten')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
