<?php

namespace App\Filament\Widgets;

use App\Models\Bookings;
use App\Models\Post;
use App\Models\Subscribers;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Posts', Post::all()->count())
                ->description('Total posts created')
                ->descriptionIcon('heroicon-s-collection')
                ->color('success'),
            Card::make('Bookings', Bookings::all()->count())
                ->description('Total number of bookings')
                ->descriptionIcon('heroicon-s-calendar')
                ->color('success'),
            Card::make('Subscribers', Subscribers::all()->count())
                ->description('Total number of subscribers')
                ->descriptionIcon('heroicon-s-user-group')
                ->color('success'),
        ];
    }
}
