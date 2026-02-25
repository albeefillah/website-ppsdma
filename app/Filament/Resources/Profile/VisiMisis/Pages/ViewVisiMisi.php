<?php

namespace App\Filament\Resources\Profile\VisiMisis\Pages;

use App\Filament\Resources\Profile\VisiMisis\VisiMisiResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewVisiMisi extends ViewRecord
{
    protected static string $resource = VisiMisiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
