<?php

namespace App\Filament\Resources\Media\Beritas\Tables;

use Illuminate\Support\Str;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Filament\Actions\Action;

class BeritasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul_berita')
                    ->searchable()
                    ->sortable()
                    ->wrap(),
                ImageColumn::make('foto')
                    ->searchable()
                    ->label('Foto Berita')
                    ->placeholder('-')
                    ->defaultImageUrl(fn ($record) => $record->getberitaUrl())
                    ->extraImgAttributes([
                        'class' => 'rounded-xl shadow-md object-cover'
                    ])
                    ->width(80)
                    ->height(80),
                TextColumn::make('konten_berita')
                    ->formatStateUsing(fn ($state) => Str::limit(strip_tags($state), 100))
                    ->wrap(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
