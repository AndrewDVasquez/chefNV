<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;


class BusinessOverview extends StatsOverviewWidget
{

    protected function getStats(): array
{
    $revenue = Order::where('payment_status', 'paid')
        ->whereBetween('created_at', [
            now()->startOfWeek(),
            now()->endOfWeek(),
        ])
        ->sum('total');

    $orders = Order::whereBetween('created_at', [
        now()->startOfWeek(),
        now()->endOfWeek(),
    ])->count();




    return [

        Stat::make(
            'Revenue This Week',
            'TT$ ' . number_format($revenue, 2)
        )
            ->description('Paid orders this week')
            ->descriptionIcon('heroicon-o-banknotes')
            ->color('success'),

        Stat::make(
            'Orders This Week',
            $orders
        )
            ->description('Orders placed this week')
            ->descriptionIcon('heroicon-o-shopping-bag')
            ->color('warning'),



    ];
}
}



