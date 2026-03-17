<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Home extends Page
{
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-home';

    protected static ?string $title = 'Home';

    protected static ?string $navigationLabel = 'Home';

    protected static ?int $navigationSort = -1;

    public function getView(): string
    {
        return 'filament.pages.home';
    }

    protected function getHeaderWidgets(): array
    {
        return [
            // nanti aktifkan setelah widget dibuat
            // \App\Filament\Widgets\MessageStats::class,
        ];
    }

    protected function getWidgets(): array
    {
        return [
            // \App\Filament\Widgets\VisitorChart::class,
            // \App\Filament\Widgets\NewsChart::class,
        ];
    }

    public function getColumns(): int | array
    {
        return 2;
    }
}