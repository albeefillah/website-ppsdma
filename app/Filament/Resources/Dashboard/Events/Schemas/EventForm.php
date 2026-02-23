<?php

namespace App\Filament\Resources\Dashboard\Events\Schemas;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
{
    return $schema->schema([
        FileUpload::make('poster')
            ->label('Poster Acara')
            ->image()
            ->directory('events')
            ->required(),

        TextInput::make('title')
            ->label('Judul Acara')
            ->required()
            ->maxLength(255),

        DatePicker::make('event_date')
            ->label('Tanggal')
            ->required(),

        TimePicker::make('event_time')
            ->label('Waktu')
            ->seconds(false)
            ->required(),

        Textarea::make('caption')
            ->label('Caption')
            ->rows(4),

        Toggle::make('is_active')
            ->label('Aktif')
            ->default(true),
    ]);
}
}
