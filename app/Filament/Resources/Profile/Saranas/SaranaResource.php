<?php

namespace App\Filament\Resources\Profile\Saranas;

use App\Filament\Resources\Profile\Saranas\Pages\CreateSarana;
use App\Filament\Resources\Profile\Saranas\Pages\EditSarana;
use App\Filament\Resources\Profile\Saranas\Pages\ListSaranas;
use App\Filament\Resources\Profile\Saranas\Pages\ViewSarana;
use App\Filament\Resources\Profile\Saranas\Schemas\SaranaForm;
use App\Filament\Resources\Profile\Saranas\Schemas\SaranaInfolist;
use App\Filament\Resources\Profile\Saranas\Tables\SaranasTable;
use App\Models\Sarana;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class SaranaResource extends Resource
{
    protected static ?string $model = Sarana::class;
    protected static string|UnitEnum|null $navigationGroup = 'Profile';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'sarana';

    public static function form(Schema $schema): Schema
    {
        return SaranaForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SaranaInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SaranasTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSaranas::route('/'),
            'create' => CreateSarana::route('/create'),
            'view' => ViewSarana::route('/{record}'),
            'edit' => EditSarana::route('/{record}/edit'),
        ];
    }

public static function getEloquentQuery(): Builder
{
    return parent::getEloquentQuery()
        ->with('cover');
}

}
