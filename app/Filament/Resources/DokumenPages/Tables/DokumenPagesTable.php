<?php

namespace App\Filament\Resources\DokumenPages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class DokumenPagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
             ->columns([
                TextColumn::make('judul')->searchable(),
                TextColumn::make('slug'),
                TextColumn::make('layout_type'),
                IconColumn::make('is_active')->boolean(),
            ])
            ->actions([
                EditAction::make(),
            ]);
    }
}
