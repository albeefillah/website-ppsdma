<?php

namespace App\Filament\Resources\Dashboard\CompanyProfiles;

use App\Filament\Resources\Dashboard\CompanyProfiles\Pages\CreateCompanyProfile;
use App\Filament\Resources\Dashboard\CompanyProfiles\Pages\EditCompanyProfile;
use App\Filament\Resources\Dashboard\CompanyProfiles\Pages\ListCompanyProfiles;
use App\Filament\Resources\Dashboard\CompanyProfiles\Pages\ViewCompanyProfile;
use App\Filament\Resources\Dashboard\CompanyProfiles\Schemas\CompanyProfileForm;
use App\Filament\Resources\Dashboard\CompanyProfiles\Schemas\CompanyProfileInfolist;
use App\Filament\Resources\Dashboard\CompanyProfiles\Tables\CompanyProfilesTable;
use App\Models\CompanyProfile;
use UnitEnum;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CompanyProfileResource extends Resource
{
    protected static ?string $model = CompanyProfile::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static string|UnitEnum|null $navigationGroup = 'Dashboard';
    protected static ?string $navigationLabel = 'Company Profile';
    protected static ?string $recordTitleAttribute = 'CompanyProfile';

    public static function form(Schema $schema): Schema
    {
        return CompanyProfileForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CompanyProfileInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CompanyProfilesTable::configure($table);
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
            'index' => ListCompanyProfiles::route('/'),
            'create' => CreateCompanyProfile::route('/create'),
            'view' => ViewCompanyProfile::route('/{record}'),
            'edit' => EditCompanyProfile::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
    return \App\Models\CompanyProfile::count() === 0;
    }
}
