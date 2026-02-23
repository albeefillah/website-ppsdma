<?php

namespace App\Filament\Resources\Layanan\Pendidikans\Pages;

use App\Filament\Resources\Layanan\Pendidikans\PendidikanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPendidikans extends ListRecords
{
    protected static string $resource = PendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
