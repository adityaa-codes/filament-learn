<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class RevenueToday extends BaseWidget
{
    protected static ?int $sort = 2;
    protected function getStats(): array
    {

        return [

        ];
    }
}
