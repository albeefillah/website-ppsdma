<?php

namespace App\Filament\Resources\Dashboard\CompanyProfiles\Pages;

use App\Filament\Resources\Dashboard\CompanyProfiles\CompanyProfileResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Models\CompanyProfile;

class ListCompanyProfiles extends ListRecords
{
    protected static string $resource = CompanyProfileResource::class;

    protected function getHeaderActions(): array
    {
        return CompanyProfile::count() === 0
        ? [CreateAction::make()]
        : [];
    }
}
