<?php

namespace App\Filament\Resources\Layanan\Pendidikans\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Components\Section;


class PendidikanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
             ->schema([
            Section::make('Informasi Pelatihan')
                ->schema([
            TextInput::make('nama')
                ->required()
                ->maxLength(255),
            TextInput::make('universitas')
                ->required()
                ->maxLength(255),
            DatePicker::make('jurusan')
                ->required()
                ->maxLength(255),
            DatePicker::make('tahun')
                ->required(),
            TextInput::make('kategori')
                ->required()
                ->maxLength(255),
        ])
        ->columnSpanFull()
            ]);
    }
}
