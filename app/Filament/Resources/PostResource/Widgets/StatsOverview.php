<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Posts', Post::all()->count())
                ->description('Total number of posts created')
                ->descriptionIcon('heroicon-s-collection')
                ->color('success'),
            Card::make('Bookings', '21')
                ->description('7% decrease')
                ->descriptionIcon('heroicon-s-trending-down')
                ->color('danger'),

            Card::make('Total users', '312k')
                ->description('12k increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('success'),

        ];
    }
}
