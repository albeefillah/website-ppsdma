<?php

namespace App\Filament\Resources\Layanan\Pendidikans\Pages;

use App\Filament\Resources\Layanan\Pendidikans\PendidikanResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPendidikan extends ViewRecord
{
    protected static string $resource = PendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
