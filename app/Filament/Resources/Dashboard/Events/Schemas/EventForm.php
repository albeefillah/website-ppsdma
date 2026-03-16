<?php

namespace App\Filament\Resources\Dashboard\Events\Schemas;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;

class EventForm
{
    public static function configure(Schema $schema): Schema
{
    return $schema->schema([
        Section::make('Form Event Mendatang')
                ->schema([
        FileUpload::make('poster')
            ->label('Poster Acara')
            ->image()
            ->disk('public')
            ->directory('events')
            ->visibility('public')
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

        RichEditor::make('caption')
            ->label('Caption')
            ->required(),

        Toggle::make('is_active')
            ->label('Aktif')
            ->default(true),
        ])
        ->columnSpanFull() 
    ]);
}
}
