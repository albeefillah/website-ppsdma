<?php

namespace App\Filament\Resources\Profile\Saranas\Pages;

use App\Filament\Resources\Profile\Saranas\SaranaResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSarana extends EditRecord
{
    protected static string $resource = SaranaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
