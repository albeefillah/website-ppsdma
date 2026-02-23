<?php

namespace App\Filament\Resources\Dashboard\Events\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

class EventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
            ImageColumn::make('poster')
                ->label('Poster')
                ->height(80),

            TextColumn::make('title')
                ->label('Judul')
                ->searchable(),

            TextColumn::make('event_date')
                ->label('Tanggal')
                ->date(),

            TextColumn::make('event_time')
                ->label('Waktu')
                ->time('H:i'),

            ToggleColumn::make('is_active')
                ->label('Aktif'),
            ])
            ->defaultSort('event_date', 'asc')
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
