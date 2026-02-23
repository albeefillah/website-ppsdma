<?php

namespace App\Filament\Resources\Profile\StrukturOrganisasis\Pages;

use App\Filament\Resources\Profile\StrukturOrganisasis\StrukturOrganisasiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStrukturOrganisasis extends ListRecords
{
    protected static string $resource = StrukturOrganisasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
