<?php

namespace App\Filament\Resources\Dashboard\Roadmaps\Pages;

use App\Filament\Resources\Dashboard\Roadmaps\RoadmapResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewRoadmap extends ViewRecord
{
    protected static string $resource = RoadmapResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
