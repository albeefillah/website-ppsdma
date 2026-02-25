<?php

namespace App\Filament\Resources\Profile\StrukturOrganisasis;

use App\Filament\Resources\Profile\StrukturOrganisasis\Pages\CreateStrukturOrganisasi;
use App\Filament\Resources\Profile\StrukturOrganisasis\Pages\EditStrukturOrganisasi;
use App\Filament\Resources\Profile\StrukturOrganisasis\Pages\ListStrukturOrganisasis;
use App\Filament\Resources\Profile\StrukturOrganisasis\Pages\ViewStrukturOrganisasi;
use App\Filament\Resources\Profile\StrukturOrganisasis\Schemas\StrukturOrganisasiForm;
use App\Filament\Resources\Profile\StrukturOrganisasis\Schemas\StrukturOrganisasiInfolist;
use App\Filament\Resources\Profile\StrukturOrganisasis\Tables\StrukturOrganisasisTable;
use App\Models\StrukturOrganisasi;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StrukturOrganisasiResource extends Resource
{
    protected static ?string $model = StrukturOrganisasi::class;
    protected static string|UnitEnum|null $navigationGroup = 'Profile';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Struktur Organisasi';

    public static function form(Schema $schema): Schema
    {
        return StrukturOrganisasiForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return StrukturOrganisasiInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StrukturOrganisasisTable::configure($table);
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
            'index' => ListStrukturOrganisasis::route('/'),
            'create' => CreateStrukturOrganisasi::route('/create'),
            'view' => ViewStrukturOrganisasi::route('/{record}'),
            'edit' => EditStrukturOrganisasi::route('/{record}/edit'),
        ];
    }
}
