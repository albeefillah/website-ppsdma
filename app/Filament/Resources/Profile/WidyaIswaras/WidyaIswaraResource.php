<?php

namespace App\Filament\Resources\Profile\WidyaIswaras;

use App\Filament\Resources\Profile\WidyaIswaras\Pages\CreateWidyaIswara;
use App\Filament\Resources\Profile\WidyaIswaras\Pages\EditWidyaIswara;
use App\Filament\Resources\Profile\WidyaIswaras\Pages\ListWidyaIswaras;
use App\Filament\Resources\Profile\WidyaIswaras\Pages\ViewWidyaIswara;
use App\Filament\Resources\Profile\WidyaIswaras\Schemas\WidyaIswaraForm;
use App\Filament\Resources\Profile\WidyaIswaras\Schemas\WidyaIswaraInfolist;
use App\Filament\Resources\Profile\WidyaIswaras\Tables\WidyaIswarasTable;
use App\Models\WidyaIswara;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class WidyaIswaraResource extends Resource
{
    protected static ?string $model = WidyaIswara::class;
    protected static string|UnitEnum|null $navigationGroup = 'Profile';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'widyaIswara';

    public static function form(Schema $schema): Schema
    {
        return WidyaIswaraForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return WidyaIswaraInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return WidyaIswarasTable::configure($table);
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
            'index' => ListWidyaIswaras::route('/'),
            'create' => CreateWidyaIswara::route('/create'),
            'view' => ViewWidyaIswara::route('/{record}'),
            'edit' => EditWidyaIswara::route('/{record}/edit'),
        ];
    }
}
