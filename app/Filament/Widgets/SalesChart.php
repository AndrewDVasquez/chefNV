<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Filament\Support\RawJs;

class WeeklySalesChart extends ChartWidget
{
    protected ?string $heading = 'Weekly Sales';

    protected ?string $maxHeight = '450px';

    protected int|string|array $columnSpan = 'full';

    protected function getData(): array
{
    return [
        'datasets' => [
            [
                'label' => 'Revenue',
                'data' => [800, 1200, 950, 1600, 2100, 2800, 1800],
                'borderColor' => '#F59E0B',
                'backgroundColor' => 'rgba(245, 158, 11, 0.15)',
                'fill' => true,
                'tension' => 0.4,
            ],
        ],

        'labels' => [
            'Mon',
            'Tue',
            'Wed',
            'Thu',
            'Fri',
            'Sat',
            'Sun',
        ],
    ];
}

    protected function getOptions(): RawJs
{
    return RawJs::make(<<<'JS'
    {
        responsive: true,

        interaction: {
            intersect: false,
            mode: 'index'
        },

        plugins: {
            legend: {
                display: false
            }
        },

        elements: {
            line: {
                tension: 0.4
            },
            point: {
                radius: 4,
                hoverRadius: 7
            }
        },

        scales: {
            y: {
                beginAtZero: false,
                ticks: {
                    callback: function(value) {
                        return '$' + value.toLocaleString();
                    }
                }
            }
        }
    }
    JS);
}

    protected function getType(): string
    {
        return 'line';
    }
}
