<?php

namespace App\Filament\Resources\Profile\StrukturOrganisasis\Pages;

use App\Filament\Resources\Profile\StrukturOrganisasis\StrukturOrganisasiResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewStrukturOrganisasi extends ViewRecord
{
    protected static string $resource = StrukturOrganisasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
