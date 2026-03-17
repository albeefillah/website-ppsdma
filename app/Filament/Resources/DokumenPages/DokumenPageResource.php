<?php

namespace App\Filament\Resources\DokumenPages;

use App\Filament\Resources\DokumenPages\Pages\CreateDokumenPage;
use App\Filament\Resources\DokumenPages\Pages\EditDokumenPage;
use App\Filament\Resources\DokumenPages\Pages\ListDokumenPages;
use App\Filament\Resources\DokumenPages\Schemas\DokumenPageForm;
use App\Filament\Resources\DokumenPages\Tables\DokumenPagesTable;
use App\Models\DokumenPage;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use App\Filament\Resources\DokumenPages\RelationManagers\DokumenItemsRelationManager;

class DokumenPageResource extends Resource
{
    protected static ?string $model = DokumenPage::class;
    protected static string|UnitEnum|null $navigationGroup = 'Dokumen';
    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Dokumen Page';
    protected static ?string $recordTitleAttribute = 'Dokumen';

    public static function form(Schema $schema): Schema
    {
        return DokumenPageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DokumenPagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
        DokumenItemsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDokumenPages::route('/'),
            'create' => CreateDokumenPage::route('/create'),
            'edit' => EditDokumenPage::route('/{record}/edit'),
        ];
    }
}
