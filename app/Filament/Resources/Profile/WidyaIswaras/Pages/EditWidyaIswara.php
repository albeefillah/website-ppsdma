<?php

namespace App\Filament\Resources\Profile\WidyaIswaras\Pages;

use App\Filament\Resources\Profile\WidyaIswaras\WidyaIswaraResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditWidyaIswara extends EditRecord
{
    protected static string $resource = WidyaIswaraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
