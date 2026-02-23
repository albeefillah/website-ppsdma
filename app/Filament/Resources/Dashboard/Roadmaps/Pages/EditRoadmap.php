<?php

namespace App\Filament\Resources\Dashboard\Roadmaps\Pages;

use App\Filament\Resources\Dashboard\Roadmaps\RoadmapResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditRoadmap extends EditRecord
{
    protected static string $resource = RoadmapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
