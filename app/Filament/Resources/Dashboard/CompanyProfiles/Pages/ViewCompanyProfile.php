<?php

namespace App\Filament\Resources\Dashboard\CompanyProfiles\Pages;

use App\Filament\Resources\Dashboard\CompanyProfiles\CompanyProfileResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCompanyProfile extends ViewRecord
{
    protected static string $resource = CompanyProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
