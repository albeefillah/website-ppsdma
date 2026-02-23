<?php

namespace App\Filament\Resources\DokumenPages\Pages;

use App\Filament\Resources\DokumenPages\DokumenPageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDokumenPage extends EditRecord
{
    protected static string $resource = DokumenPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
