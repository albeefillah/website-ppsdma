<?php

namespace App\Filament\Resources\Layanan\Pelatihans;

use App\Filament\Resources\Layanan\Pelatihans\Pages\CreatePelatihan;
use App\Filament\Resources\Layanan\Pelatihans\Pages\EditPelatihan;
use App\Filament\Resources\Layanan\Pelatihans\Pages\ListPelatihans;
use App\Filament\Resources\Layanan\Pelatihans\Pages\ViewPelatihan;
use App\Filament\Resources\Layanan\Pelatihans\Schemas\PelatihanForm;
use App\Filament\Resources\Layanan\Pelatihans\Schemas\PelatihanInfolist;
use App\Filament\Resources\Layanan\Pelatihans\Tables\PelatihansTable;
use App\Models\Pelatihan;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PelatihanResource extends Resource
{
    protected static ?string $model = Pelatihan::class;
    protected static string|UnitEnum|null $navigationGroup = 'Layanan';
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Pelatihan';
    protected static ?string $recordTitleAttribute = 'Pelatihan';

    public static function form(Schema $schema): Schema
    {
        return PelatihanForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PelatihanInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PelatihansTable::configure($table);
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
            'index' => ListPelatihans::route('/'),
            'create' => CreatePelatihan::route('/create'),
            'view' => ViewPelatihan::route('/{record}'),
            'edit' => EditPelatihan::route('/{record}/edit'),
        ];
    }
}
