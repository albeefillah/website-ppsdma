<?php

namespace App\Filament\Resources\Profile\StrukturOrganisasis\Pages;

use App\Filament\Resources\Profile\StrukturOrganisasis\StrukturOrganisasiResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditStrukturOrganisasi extends EditRecord
{
    protected static string $resource = StrukturOrganisasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
