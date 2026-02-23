<?php

namespace App\Filament\Resources\Layanan\Pelatihans\Pages;

use App\Filament\Resources\Layanan\Pelatihans\PelatihanResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPelatihan extends ViewRecord
{
    protected static string $resource = PelatihanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
