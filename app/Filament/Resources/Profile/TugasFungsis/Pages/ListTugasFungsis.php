<?php

namespace App\Filament\Resources\Profile\TugasFungsis\Pages;

use App\Filament\Resources\Profile\TugasFungsis\TugasFungsiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTugasFungsis extends ListRecords
{
    protected static string $resource = TugasFungsiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
