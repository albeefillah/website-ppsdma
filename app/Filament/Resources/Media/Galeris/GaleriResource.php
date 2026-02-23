<?php

namespace App\Filament\Resources\Media\Galeris;

use App\Filament\Resources\Media\Galeris\Pages\CreateGaleri;
use App\Filament\Resources\Media\Galeris\Pages\EditGaleri;
use App\Filament\Resources\Media\Galeris\Pages\ListGaleris;
use App\Filament\Resources\Media\Galeris\Pages\ViewGaleri;
use App\Filament\Resources\Media\Galeris\Schemas\GaleriForm;
use App\Filament\Resources\Media\Galeris\Schemas\GaleriInfolist;
use App\Filament\Resources\Media\Galeris\Tables\GalerisTable;
use App\Models\Galeri;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;
    protected static string|UnitEnum|null $navigationGroup = 'Media';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'galeri';

    public static function form(Schema $schema): Schema
    {
        return GaleriForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return GaleriInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GalerisTable::configure($table);
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
            'index' => ListGaleris::route('/'),
            'create' => CreateGaleri::route('/create'),
            'view' => ViewGaleri::route('/{record}'),
            'edit' => EditGaleri::route('/{record}/edit'),
        ];
    }
}
