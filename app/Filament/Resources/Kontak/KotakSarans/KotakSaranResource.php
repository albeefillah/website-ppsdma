<?php

namespace App\Filament\Resources\Kontak\KotakSarans;

use App\Filament\Resources\Kontak\KotakSarans\Pages\CreateKotakSaran;
use App\Filament\Resources\Kontak\KotakSarans\Pages\EditKotakSaran;
use App\Filament\Resources\Kontak\KotakSarans\Pages\ListKotakSarans;
use App\Filament\Resources\Kontak\KotakSarans\Pages\ViewKotakSaran;
use App\Filament\Resources\Kontak\KotakSarans\Schemas\KotakSaranForm;
use App\Filament\Resources\Kontak\KotakSarans\Schemas\KotakSaranInfolist;
use App\Filament\Resources\Kontak\KotakSarans\Tables\KotakSaransTable;
use App\Models\KotakSaran;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KotakSaranResource extends Resource
{
    protected static ?string $model = KotakSaran::class;
    protected static string|UnitEnum|null $navigationGroup = 'Kontak';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Kotak Saran';


    public static function table(Table $table): Table
    {
        return KotakSaransTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function canCreate(): bool
    {
    return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => ListKotakSarans::route('/'),
            //'create' => CreateKotakSaran::route('/create'),
            'view' => ViewKotakSaran::route('/{record}'),
            //'edit' => EditKotakSaran::route('/{record}/edit'),
        ];
    }
}
