<?php

namespace App\Filament\Resources\Dashboard\LayananPubliks\Pages;

use App\Filament\Resources\Dashboard\LayananPubliks\LayananPublikResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLayananPubliks extends ListRecords
{
    protected static string $resource = LayananPublikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
