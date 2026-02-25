<?php

namespace App\Filament\Resources\Profile\Saranas\Pages;

use App\Filament\Resources\Profile\Saranas\SaranaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSarana extends ViewRecord
{
    protected static string $resource = SaranaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
