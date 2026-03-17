<?php

namespace App\Filament\Resources\Dashboard\Banners;

use App\Filament\Resources\Dashboard\Banners\Pages\CreateBanner;
use App\Filament\Resources\Dashboard\Banners\Pages\EditBanner;
use App\Filament\Resources\Dashboard\Banners\Pages\ListBanners;
use App\Filament\Resources\Dashboard\Banners\Pages\ViewBanner;
use App\Filament\Resources\Dashboard\Banners\Schemas\BannerForm;
use App\Filament\Resources\Dashboard\Banners\Schemas\BannerInfolist;
use App\Filament\Resources\Dashboard\Banners\Tables\BannersTable;
use App\Models\Banner;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-photo';
    protected static string|UnitEnum|null $navigationGroup = 'Dashboard';
    protected static ?string $recordTitleAttribute = 'banner';
    protected static ?string $navigationLabel = 'Banner';
    public static function form(Schema $schema): Schema
    {
        return BannerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return BannerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BannersTable::configure($table);
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
            'index' => ListBanners::route('/'),
            'create' => CreateBanner::route('/create'),
            'view' => ViewBanner::route('/{record}'),
            'edit' => EditBanner::route('/{record}/edit'),
        ];
    }
}
