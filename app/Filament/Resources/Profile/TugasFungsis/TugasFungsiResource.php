<?php

namespace App\Filament\Resources\Profile\TugasFungsis;

use App\Filament\Resources\Profile\TugasFungsis\Pages\CreateTugasFungsi;
use App\Filament\Resources\Profile\TugasFungsis\Pages\EditTugasFungsi;
use App\Filament\Resources\Profile\TugasFungsis\Pages\ListTugasFungsis;
use App\Filament\Resources\Profile\TugasFungsis\Pages\ViewTugasFungsi;
use App\Filament\Resources\Profile\TugasFungsis\Schemas\TugasFungsiForm;
use App\Filament\Resources\Profile\TugasFungsis\Schemas\TugasFungsiInfolist;
use App\Filament\Resources\Profile\TugasFungsis\Tables\TugasFungsisTable;
use App\Models\TugasFungsi;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TugasFungsiResource extends Resource
{
    protected static ?string $model = TugasFungsi::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-clipboard-document';
    protected static string|UnitEnum|null $navigationGroup = 'Profile';
    protected static ?string $recordTitleAttribute = 'no';

    public static function form(Schema $schema): Schema
    {
        return TugasFungsiForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return TugasFungsiInfolist::configure($schema);
    }

    /*public static function table(Table $table): Table
    {
        return TugasFungsisTable::configure($table);
    }*/

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            
            /*'index' => ListTugasFungsis::route('/'),
            'create' => CreateTugasFungsi::route('/create'),
            'view' => ViewTugasFungsi::route('/{record}'),
            'edit' => EditTugasFungsi::route('/{record}/edit'),*/
        ];
    }
}
