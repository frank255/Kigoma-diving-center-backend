<?php

namespace App\Filament\Widgets;

use App\Models\Bookings;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class BookingsChart extends LineChartWidget
{
    protected static ?int $sort = 1;
    protected static ?string $heading = 'Bookings';

    protected function getData(): array
    {

        // $data = Trend::model(Bookings::class)
        //     ->between(
        //         start: now()->startOfYear(),
        //         end: now()->endOfYear(),
        //     )
        //     ->perMonth()
        //     ->count();


        return [
            'datasets' => [
                [
                    'label' => '',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }
}
