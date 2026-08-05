<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;


class BusinessOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Revenue Today', '$1,250')
                ->description('12% increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),

            Stat::make('Orders Today', '18')
                ->description('3 awaiting preparation')
                ->descriptionIcon('heroicon-m-shopping-bag')
                ->color('warning'),

            Stat::make('Customers', '4')
                ->description('New today')
                ->descriptionIcon('heroicon-m-user-plus')
                ->color('info'),

            Stat::make('Products', '56')
                ->description('8 featured')
                ->descriptionIcon('heroicon-m-cake')
                ->color('primary'),
        ];
    }
}



