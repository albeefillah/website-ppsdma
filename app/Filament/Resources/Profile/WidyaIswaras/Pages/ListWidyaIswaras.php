<?php

namespace App\Filament\Resources\Profile\WidyaIswaras\Pages;

use App\Filament\Resources\Profile\WidyaIswaras\WidyaIswaraResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListWidyaIswaras extends ListRecords
{
    protected static string $resource = WidyaIswaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
