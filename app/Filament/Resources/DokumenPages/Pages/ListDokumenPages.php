<?php

namespace App\Filament\Resources\DokumenPages\Pages;

use App\Filament\Resources\DokumenPages\DokumenPageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDokumenPages extends ListRecords
{
    protected static string $resource = DokumenPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
