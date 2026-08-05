<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;

class RecentOrders extends TableWidget
{
    protected static ?string $heading = 'Recent Orders';

    protected int|string|array $columnSpan = 'full';

    protected static ?string $pollingInterval = '30s';

    public function table(Table $table): Table
    {
        return $table
        ->emptyStateHeading('No orders yet')
        ->emptyStateDescription('Orders will appear here once customers begin placing them.')

            ->query(
                Order::query()
                    ->with('user')
                    ->latest()
            )

            ->defaultPaginationPageOption(5)

            ->columns([

                Tables\Columns\TextColumn::make('order_no')
                    ->label('Order #')
                    ->searchable()
                    ->copyable()
                    ->color('primary')
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('user.name')
                    ->label('Customer')
                    ->icon('heroicon-o-user')
                    ->searchable(),

                Tables\Columns\TextColumn::make('payment_status')
                    ->badge()
                    ->icon(fn (string $state): string => match ($state) {
                        'paid' => 'heroicon-o-check-circle',
                        'unpaid' => 'heroicon-o-x-circle',
                        default => 'heroicon-o-clock',
                 })
                ->colors([
                    'success' => 'paid',
                    'danger' => 'unpaid',
                ]),

                Tables\Columns\TextColumn::make('total')
                    ->label('Total')
                    ->money('TTD')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ordered')
                    ->since()
                    ->sortable(),

            ]);
    }
}
