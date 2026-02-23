<?php

namespace App\Filament\Resources\Profile\Sejarahs\Pages;

use App\Filament\Resources\Profile\Sejarahs\SejarahResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSejarahs extends ListRecords
{
    protected static string $resource = SejarahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
