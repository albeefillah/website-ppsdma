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
                ->label('Gambar')
                ->placeholder('-')
                ->defaultImageUrl(fn ($record) => $record->getSejarahUrl())
                ->extraImgAttributes([
                        'class' => 'rounded-xl shadow-md object-cover'
                    ])
                ->width(80)
                ->height(80),
                
            TextColumn::make('Deskripsi')
                ->label('Deskripsi')
                ->html()
                ->limit(100)
                ->wrap(),
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
