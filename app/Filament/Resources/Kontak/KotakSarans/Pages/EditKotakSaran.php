<?php

namespace App\Filament\Resources\Kontak\KotakSarans\Pages;

use App\Filament\Resources\Kontak\KotakSarans\KotakSaranResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditKotakSaran extends EditRecord
{
    protected static string $resource = KotakSaranResource::class;

    public function getBreadcrumbs(): array
    {
        return [];
    }


    protected function getHeaderActions(): array
    {
        return [
            //ViewAction::make(),
            //DeleteAction::make(),
        ];
    }
}
