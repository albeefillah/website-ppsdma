<?php

namespace App\Filament\Resources\DokumenPages\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Schemas\Schema;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class DokumenItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'items';

    protected static ?string $title = 'Dokumen';

    public function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('judul')
                ->required(),

            Forms\Components\FileUpload::make('file_path')
                ->label('File PDF')
                ->directory('dokumen')
                ->acceptedFileTypes(['application/pdf'])
                ->required(),

            Forms\Components\FileUpload::make('thumbnail')
                ->image()
                ->directory('dokumen-thumbnail'),

            Forms\Components\Toggle::make('is_active')
                ->default(true),
        ]);
    }

    public function table(Table $table): Table
    {
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('judul'),
            Tables\Columns\IconColumn::make('is_active')->boolean(),
        ])
         ->headerActions([
            CreateAction::make(),
        ])
        ->recordActions([
            EditAction::make(),
            DeleteAction::make(),
        ]);
    }
}