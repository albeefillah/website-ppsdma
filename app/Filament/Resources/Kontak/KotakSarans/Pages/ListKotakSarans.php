<?php

namespace App\Filament\Resources\Kontak\KotakSarans\Pages;

use App\Filament\Resources\Kontak\KotakSarans\KotakSaranResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKotakSarans extends ListRecords
{
    protected static string $resource = KotakSaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->hidden(),
        ];
    }
}
