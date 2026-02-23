<?php

namespace App\Filament\Resources\Kontak\Kontaks\Pages;

use App\Filament\Resources\Kontak\Kontaks\KontakResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKontaks extends ListRecords
{
    protected static string $resource = KontakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
