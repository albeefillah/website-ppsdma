<?php

namespace App\Filament\Resources\Dashboard\CompanyProfiles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class CompanyProfilesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->paginated(false) 
            ->columns([
            TextColumn::make('judul')->searchable(),
            TextColumn::make('video_url')
            ->label('Video')
            ->limit(30)
            ->url(fn ($record) => $record->video_url, true),
            TextColumn::make('created_at')->dateTime(),
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
