<?php

namespace App\Filament\Resources\Profile\VisiMisis;

use App\Filament\Resources\Profile\VisiMisis\Pages\CreateVisiMisi;
use App\Filament\Resources\Profile\VisiMisis\Pages\EditVisiMisi;
use App\Filament\Resources\Profile\VisiMisis\Pages\ListVisiMisis;
use App\Filament\Resources\Profile\VisiMisis\Pages\ViewVisiMisi;
use App\Filament\Resources\Profile\VisiMisis\Schemas\VisiMisiForm;
use App\Filament\Resources\Profile\VisiMisis\Schemas\VisiMisiInfolist;
use App\Filament\Resources\Profile\VisiMisis\Tables\VisiMisisTable;
use App\Models\VisiMisi;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VisiMisiResource extends Resource
{
    protected static ?string $model = VisiMisi::class;
    protected static string|UnitEnum|null $navigationGroup = 'Profile';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'visiMisi';

    public static function form(Schema $schema): Schema
    {
        return VisiMisiForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return VisiMisiInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VisiMisisTable::configure($table);
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
            'index' => ListVisiMisis::route('/'),
            'create' => CreateVisiMisi::route('/create'),
            'view' => ViewVisiMisi::route('/{record}'),
            'edit' => EditVisiMisi::route('/{record}/edit'),
        ];
    }
}
