<?php

namespace App\Filament\Resources\Profile\Saranas\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Schemas\Components\Image;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\Facades\Storage;

class SaranasTable
{
    public static function configure(Table $table): Table
    {
        return $table
        ->modifyQueryUsing(fn ($query) => $query->with('cover'))
            ->columns([
                ImageColumn::make('cover.image_path')
                    ->label('Cover')
                    ->getStateUsing (fn ($record) => $record->cover
                    ? asset('storage/' . $record->cover->image_path)
                    : null
                    )
                    ->height(100)
                    ->width(100),

                TextColumn::make('sarana')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
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
