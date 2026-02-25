<?php

namespace App\Filament\Resources\Dashboard\Events;

use App\Filament\Resources\Dashboard\Events\Pages\CreateEvent;
use App\Filament\Resources\Dashboard\Events\Pages\EditEvent;
use App\Filament\Resources\Dashboard\Events\Pages\ListEvents;
use App\Filament\Resources\Dashboard\Events\Pages\ViewEvent;
use App\Filament\Resources\Dashboard\Events\Schemas\EventForm;
use App\Filament\Resources\Dashboard\Events\Schemas\EventInfolist;
use App\Filament\Resources\Dashboard\Events\Tables\EventsTable;
use App\Models\Event;
use UnitEnum;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;
    protected static string|UnitEnum|null $navigationGroup = 'Dashboard';
    protected static ?string $navigationLabel = 'Event Mendatang';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Event';

    public static function form(Schema $schema): Schema
    {
        return EventForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return EventInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EventsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEvents::route('/'),
            'create' => CreateEvent::route('/create'),
            'view' => ViewEvent::route('/{record}'),
            'edit' => EditEvent::route('/{record}/edit'),
        ];
    }
}
