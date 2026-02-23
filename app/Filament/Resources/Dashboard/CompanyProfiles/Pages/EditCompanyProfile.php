<?php

namespace App\Filament\Resources\Dashboard\CompanyProfiles\Pages;

use App\Filament\Resources\Dashboard\CompanyProfiles\CompanyProfileResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditCompanyProfile extends EditRecord
{
    protected static string $resource = CompanyProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
