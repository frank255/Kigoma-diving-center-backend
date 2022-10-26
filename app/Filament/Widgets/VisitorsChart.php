<?php

namespace App\Filament\Widgets;

use Filament\Widgets\LineChartWidget;

class VisitorsChart extends LineChartWidget
{
    protected static ?string $heading = 'Visitors';

    protected function getData(): array
    {
        return [
            
        ];
    }
}
