<?php

namespace App\Filament\Resources\Profile\VisiMisis\Pages;

use App\Filament\Resources\Profile\VisiMisis\VisiMisiResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditVisiMisi extends EditRecord
{
    protected static string $resource = VisiMisiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
