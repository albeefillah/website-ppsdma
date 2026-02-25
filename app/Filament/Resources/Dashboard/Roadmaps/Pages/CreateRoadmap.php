<?php

namespace App\Filament\Resources\Dashboard\Roadmaps\Pages;

use App\Filament\Resources\Dashboard\Roadmaps\RoadmapResource;
use Filament\Resources\Pages\CreateRecord;

class CreateRoadmap extends CreateRecord
{
    protected static string $resource = RoadmapResource::class;

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction(),
            $this->getCancelFormAction(),
        ];
    }
}
