<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class WeeklySalesChart extends ChartWidget
{
    protected ?string $heading = 'Weekly Sales';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Sales',
                    'data' => [800, 1200, 950, 1600, 2100, 2800, 1800],
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

    protected function getType(): string
    {
        return 'line';
    }
}
