<?php

namespace App\Filament\Resources\Kontak\Kontaks\Pages;

use App\Filament\Resources\Kontak\Kontaks\KontakResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewKontak extends ViewRecord
{
    protected static string $resource = KontakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            
        ];
    }
}
