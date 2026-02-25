<?php

namespace App\Filament\Resources\Profile\VisiMisis\Pages;

use App\Filament\Resources\Profile\VisiMisis\VisiMisiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVisiMisis extends ListRecords
{
    protected static string $resource = VisiMisiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
