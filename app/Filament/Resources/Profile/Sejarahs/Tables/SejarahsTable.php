<?php

namespace App\Filament\Resources\Profile\Sejarahs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SejarahsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('judul')
                ->label('Judul')
                ->searchable(),
            TextColumn::make('Tahun')
                ->label('Tahun')
                ->date(),
            ImageColumn::make('image')
                ->label('image'),
            TextColumn::make('Deskripsi')
                ->label('Deskripsi')
                ->limit(20),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
