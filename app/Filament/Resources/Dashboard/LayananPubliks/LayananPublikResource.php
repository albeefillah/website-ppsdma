<?php

namespace App\Filament\Resources\Dashboard\LayananPubliks;

use App\Filament\Resources\Dashboard\LayananPubliks\Pages\CreateLayananPublik;
use App\Filament\Resources\Dashboard\LayananPubliks\Pages\EditLayananPublik;
use App\Filament\Resources\Dashboard\LayananPubliks\Pages\ListLayananPubliks;
use App\Filament\Resources\Dashboard\LayananPubliks\Pages\ViewLayananPublik;
use App\Filament\Resources\Dashboard\LayananPubliks\Schemas\LayananPublikForm;
use App\Filament\Resources\Dashboard\LayananPubliks\Schemas\LayananPublikInfolist;
use App\Filament\Resources\Dashboard\LayananPubliks\Tables\LayananPubliksTable;
use App\Models\LayananPublik;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use ZPMLabs\FilamentIconPicker\Forms\IconPicker;

class LayananPublikResource extends Resource
{
    protected static ?string $model = LayananPublik::class;
    protected static string|UnitEnum|null $navigationGroup = 'Dashboard';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static ?string $navigationLabel = 'Layanan Publik';
    protected static ?string $recordTitleAttribute = 'LayananPublik';
    protected function getFormSchema(): array
    {
        return [
            IconPicker::make('icon'),
        ];
    }
    public static function form(Schema $schema): Schema
    {
        return LayananPublikForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return LayananPublikInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LayananPubliksTable::configure($table);
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
            'index' => ListLayananPubliks::route('/'),
            'create' => CreateLayananPublik::route('/create'),
            'view' => ViewLayananPublik::route('/{record}'),
            'edit' => EditLayananPublik::route('/{record}/edit'),
        ];
    }
}
