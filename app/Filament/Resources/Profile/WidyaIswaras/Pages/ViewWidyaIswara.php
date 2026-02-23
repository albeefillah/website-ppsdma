<?php

namespace App\Filament\Resources\Profile\WidyaIswaras\Pages;

use App\Filament\Resources\Profile\WidyaIswaras\WidyaIswaraResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewWidyaIswara extends ViewRecord
{
    protected static string $resource = WidyaIswaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
