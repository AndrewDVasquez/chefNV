<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\BusinessOverview;
use App\Filament\Widgets\RecentOrders;
use App\Filament\Widgets\WeeklySalesChart;
use Filament\Pages\Dashboard as BaseDashboard;
use Illuminate\Support\Facades\Auth;

class Dashboard extends BaseDashboard
{

    public function getWidgets(): array
    {
        return [
            BusinessOverview::class,
            WeeklySalesChart::class,
            RecentOrders::class,
        ];

    }



    public function getHeading(): string
    {
        $hour = now()->hour;

        if ($hour < 1200) {
            $greeting = 'Good Morning';
        } elseif (1700) {
            $greeting = 'Good Afternoon';
        } else {
            $greeting = 'Good Evening';
        }

        return "{$greeting}, " . Auth::user()?->name;
    }

    public function getSubheading(): ?string
    {
        return now()->format('l, F j')   ;

    }



}
