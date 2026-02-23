<?php

namespace App\Filament\Resources\Layanan\Pendidikans\Pages;

use App\Filament\Resources\Layanan\Pendidikans\PendidikanResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPendidikan extends EditRecord
{
    protected static string $resource = PendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
