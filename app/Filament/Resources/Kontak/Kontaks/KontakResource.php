<?php

namespace App\Filament\Resources\Kontak\Kontaks;


use App\Filament\Resources\Kontak\Kontaks\Pages\CreateKontak;
use App\Filament\Resources\Kontak\Kontaks\Pages\EditKontak;
use App\Filament\Resources\Kontak\Kontaks\Pages\ListKontaks;
use App\Filament\Resources\Kontak\Kontaks\Pages\ViewKontak;
use App\Filament\Resources\Kontak\Kontaks\Schemas\KontakForm;
use App\Filament\Resources\Kontak\Kontaks\Schemas\KontakInfolist;
use App\Filament\Resources\Kontak\Kontaks\Tables\KontaksTable;
use App\Models\Kontak;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;


class KontakResource extends Resource
{
    protected static ?string $model = Kontak::class;
    protected static string|UnitEnum|null $navigationGroup = 'Kontak';
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-phone';
    protected static ?string $navigationLabel = 'Kontak';
    protected static ?string $recordTitleAttribute = 'kontak';

    public static function form(Schema $schema): Schema
    {
        return KontakForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return KontakInfolist::configure($schema);
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
            'index' => EditKontak::route('/'),
            //'create' => CreateKontak::route('/create'),
            //'view' => ViewKontak::route('/{record}'),
            'edit' => EditKontak::route('/{record}/edit'),
        ];
    }
}
