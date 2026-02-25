<?php

namespace App\Filament\Resources\Layanan\Pelatihans\Pages;

use App\Filament\Resources\Layanan\Pelatihans\PelatihanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPelatihans extends ListRecords
{
    protected static string $resource = PelatihanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
