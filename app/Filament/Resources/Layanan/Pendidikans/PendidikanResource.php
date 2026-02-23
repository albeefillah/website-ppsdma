<?php

namespace App\Filament\Resources\Layanan\Pendidikans;

use App\Filament\Resources\Layanan\Pendidikans\Pages\CreatePendidikan;
use App\Filament\Resources\Layanan\Pendidikans\Pages\EditPendidikan;
use App\Filament\Resources\Layanan\Pendidikans\Pages\ListPendidikans;
use App\Filament\Resources\Layanan\Pendidikans\Pages\ViewPendidikan;
use App\Filament\Resources\Layanan\Pendidikans\Schemas\PendidikanForm;
use App\Filament\Resources\Layanan\Pendidikans\Schemas\PendidikanInfolist;
use App\Filament\Resources\Layanan\Pendidikans\Tables\PendidikansTable;
use App\Models\Pendidikan;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PendidikanResource extends Resource
{
    protected static ?string $model = Pendidikan::class;
    protected static string|UnitEnum|null $navigationGroup = 'Layanan';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Pendidikan';

    public static function form(Schema $schema): Schema
    {
        return PendidikanForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PendidikanInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PendidikansTable::configure($table);
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
            'index' => ListPendidikans::route('/'),
            'create' => CreatePendidikan::route('/create'),
            'view' => ViewPendidikan::route('/{record}'),
            'edit' => EditPendidikan::route('/{record}/edit'),
        ];
    }
}
