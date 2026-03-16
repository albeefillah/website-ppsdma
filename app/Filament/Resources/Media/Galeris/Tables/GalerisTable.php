<?php

namespace App\Filament\Resources\Media\Galeris\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class GalerisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul_galeri')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('foto')
                    ->searchable()
                    ->label('Foto Galeri')
                    ->placeholder('-')
                    ->defaultImageUrl(fn ($record) => $record->getGaleriUrl())
                    ->extraImgAttributes([
                        'class' => 'rounded-xl shadow-md object-cover'
                    ])
                    ->width(400)
                    ->height(400),
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
