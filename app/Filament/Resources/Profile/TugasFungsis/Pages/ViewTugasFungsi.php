<?php

namespace App\Filament\Resources\Profile\TugasFungsis\Pages;

use App\Filament\Resources\Profile\TugasFungsis\TugasFungsiResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTugasFungsi extends ViewRecord
{
    protected static string $resource = TugasFungsiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
