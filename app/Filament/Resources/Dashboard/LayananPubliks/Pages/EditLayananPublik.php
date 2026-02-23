<?php

namespace App\Filament\Resources\Dashboard\LayananPubliks\Pages;

use App\Filament\Resources\Dashboard\LayananPubliks\LayananPublikResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditLayananPublik extends EditRecord
{
    protected static string $resource = LayananPublikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }

    
}
