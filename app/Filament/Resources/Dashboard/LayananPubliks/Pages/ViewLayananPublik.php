<?php

namespace App\Filament\Resources\Dashboard\LayananPubliks\Pages;

use App\Filament\Resources\Dashboard\LayananPubliks\LayananPublikResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewLayananPublik extends ViewRecord
{
    protected static string $resource = LayananPublikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
