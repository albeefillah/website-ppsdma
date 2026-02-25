<?php

namespace App\Filament\Resources\Profile\Sejarahs\Pages;

use App\Filament\Resources\Profile\Sejarahs\SejarahResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSejarah extends EditRecord
{
    protected static string $resource = SejarahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
