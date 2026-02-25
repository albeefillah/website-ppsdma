<?php

namespace App\Filament\Resources\Dashboard\Events\Pages;

use App\Filament\Resources\Dashboard\Events\EventResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEvent extends CreateRecord
{
    protected static string $resource = EventResource::class;
}
