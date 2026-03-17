<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\KotakSaran;

class MessageStats extends StatsOverviewWidget
{
    protected function getCards(): array
    {
        $bulanIni = now()->month;

        return [
            Card::make('Pesan Bulan Ini', 
                KotakSaran::whereMonth('created_at', $bulanIni)->count()
            ),

            Card::make('Total Pesan', 
                KotakSaran::count()
            ),
        ];
    }
}