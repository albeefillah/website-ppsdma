<?php

namespace App\Filament\Resources\Profile\TugasFungsis\Pages;

use App\Filament\Resources\Profile\TugasFungsis\TugasFungsiResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditTugasFungsi extends EditRecord
{
    protected static string $resource = TugasFungsiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
