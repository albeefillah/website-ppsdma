<?php

namespace App\Filament\Resources\Dashboard\Banners\Pages;

use App\Filament\Resources\Dashboard\Banners\BannerResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewBanner extends ViewRecord
{
    protected static string $resource = BannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
