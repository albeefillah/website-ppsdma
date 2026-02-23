<?php

namespace App\Filament\Resources\Profile\Saranas\Pages;

use App\Filament\Resources\Profile\Saranas\SaranaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSaranas extends ListRecords
{
    protected static string $resource = SaranaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
