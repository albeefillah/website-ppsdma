<?php

namespace App\Filament\Resources\Profile\Sejarahs\Pages;

use App\Filament\Resources\Profile\Sejarahs\SejarahResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSejarah extends ViewRecord
{
    protected static string $resource = SejarahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
