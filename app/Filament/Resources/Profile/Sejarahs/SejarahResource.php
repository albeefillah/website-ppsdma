<?php

namespace App\Filament\Resources\Profile\Sejarahs;

use App\Filament\Resource\Profile\Sejarahs\Tables\SejarahsTable as TablesSejarahsTable;
use App\Filament\Resources\Profile\Sejarahs\Pages\CreateSejarah;
use App\Filament\Resources\Profile\Sejarahs\Pages\EditSejarah;
use App\Filament\Resources\Profile\Sejarahs\Pages\ListSejarahs;
use App\Filament\Resources\Profile\Sejarahs\Pages\ViewSejarah;
use App\Filament\Resources\Profile\Sejarahs\Schemas\SejarahForm;
use App\Filament\Resources\Profile\Sejarahs\Schemas\SejarahInfolist;
use App\Filament\Resources\Profile\Sejarahs\Tables\SejarahsTable;
use App\Models\Sejarah;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SejarahResource extends Resource
{
    protected static ?string $model = Sejarah::class;
    protected static string|UnitEnum|null $navigationGroup = 'Profile';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Sejarah';

    public static function form(Schema $schema): Schema
    {
        return SejarahForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SejarahInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SejarahsTable::configure($table);
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
            'index' => ListSejarahs::route('/'),
            'create' => CreateSejarah::route('/create'),
            'view' => ViewSejarah::route('/{record}'),
            'edit' => EditSejarah::route('/{record}/edit'),
        ];
    }
}
