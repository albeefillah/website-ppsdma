<?php

namespace App\Filament\Resources\Media\Beritas;

use App\Filament\Resources\Media\Beritas\Pages\CreateBerita;
use App\Filament\Resources\Media\Beritas\Pages\EditBerita;
use App\Filament\Resources\Media\Beritas\Pages\ListBeritas;
use App\Filament\Resources\Media\Beritas\Pages\ViewBerita;
use App\Filament\Resources\Media\Beritas\Schemas\BeritaForm;
use App\Filament\Resources\Media\Beritas\Schemas\BeritaInfolist;
use App\Filament\Resources\Media\Beritas\Tables\BeritasTable;
use App\Models\Berita;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;
    protected static string|UnitEnum|null $navigationGroup = 'Media';
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationLabel = 'Berita';
    protected static ?string $recordTitleAttribute = 'berita';

    public static function form(Schema $schema): Schema
    {
        return BeritaForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BeritaInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BeritasTable::configure($table);
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
            'index' => ListBeritas::route('/'),
            'create' => CreateBerita::route('/create'),
            'view' => ViewBerita::route('/{record}'),
            'edit' => EditBerita::route('/{record}/edit'),
        ];
    }
}
