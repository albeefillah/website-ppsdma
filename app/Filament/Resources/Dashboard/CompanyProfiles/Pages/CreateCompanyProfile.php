<?php

namespace App\Filament\Resources\Dashboard\CompanyProfiles\Pages;

use App\Filament\Resources\Dashboard\CompanyProfiles\CompanyProfileResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCompanyProfile extends CreateRecord
{
    protected static string $resource = CompanyProfileResource::class;
    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction(),
            $this->getCancelFormAction(),
        ];
    }
}
