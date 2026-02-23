<?php

namespace App\Filament\Resources\Media\Beritas\Pages;

use App\Filament\Resources\Media\Beritas\BeritaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBerita extends ViewRecord
{
    protected static string $resource = BeritaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
