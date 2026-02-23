<?php

namespace App\Filament\Resources\Dashboard\Roadmaps\Pages;

use App\Filament\Resources\Dashboard\Roadmaps\RoadmapResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use App\Models\Roadmap;


class ListRoadmaps extends ListRecords
{
    protected static string $resource = RoadmapResource::class;

    protected function getHeaderActions(): array
    {
        return Roadmap::count() === 0
        ? [CreateAction::make()]
        : [];
    }
}
