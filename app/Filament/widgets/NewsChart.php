<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Berita;

class NewsChart extends ChartWidget
{
    public function getHeading(): ?string
    {
        return 'Jumlah Berita per Bulan';
    }

    protected function getData(): array
    {
        $data = Berita::selectRaw('MONTH(created_at) as bulan, COUNT(*) as total')
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->pluck('total', 'bulan');

        $labels = [];
        $values = [];

        foreach ($data as $bulan => $total) {
            $labels[] = date('F', mktime(0, 0, 0, $bulan, 1));
            $values[] = $total;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Berita',
                    'data' => $values,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}