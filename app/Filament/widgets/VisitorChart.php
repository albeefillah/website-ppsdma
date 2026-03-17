<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Visitor;
use Carbon\Carbon;

class VisitorChart extends ChartWidget
{
    public function getHeading(): ?string
    {
        return 'Pengunjung 7 Hari Terakhir';
    }

    protected function getData(): array
    {
        $data = [];
        $labels = [];

        for ($i = 6; $i >= 0; $i--) {
            $tanggal = Carbon::now()->subDays($i);

            $count = Visitor::whereDate('created_at', $tanggal)->count();

            $data[] = $count;
            $labels[] = $tanggal->format('d M');
        }

        return [
            'datasets' => [
                [
                    'label' => 'Pengunjung',
                    'data' => $data,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}