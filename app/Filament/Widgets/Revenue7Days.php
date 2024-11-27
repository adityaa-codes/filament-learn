<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class Revenue7Days extends BaseWidget
{

    protected static ?int $sort = 3;
    protected function getStats(): array
    {
        return [

        ];
    }
}
