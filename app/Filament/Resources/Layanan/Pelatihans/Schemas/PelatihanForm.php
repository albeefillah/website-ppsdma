<?php

namespace App\Filament\Resources\Layanan\Pelatihans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PelatihanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
            Section::make('Informasi Pelatihan')
                ->schema([
            FileUpload::make('banner')
                ->label('Banner Pelatihan')
                ->image()
                ->disk('public')
                ->directory('pelatihan')
                ->columnSpanFull()
                ->visibility('public')
                ->required(),

            TextInput::make('nama_pelatihan')
                ->required()
                ->maxLength(255),

            DatePicker::make('tanggal_mulai')
                ->required(),

            DatePicker::make('tanggal_selesai')
                ->required(),

            TextInput::make('lokasi')
                ->required()
                ->maxLength(255),

            TextInput::make('jumlah_peserta')
                ->numeric()
                ->required(),
        ])
        ->columnSpanFull()
            ]);
    }
}
