<?php

namespace App\Filament\Resources\Kontak\KotakSarans\Pages;

use App\Filament\Resources\Kontak\KotakSarans\KotakSaranResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewKotakSaran extends ViewRecord
{
    protected static string $resource = KotakSaranResource::class;

    protected function getHeaderActions(): array
    {
        return [    
        ];
    }
}
