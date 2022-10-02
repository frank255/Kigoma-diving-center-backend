<?php

namespace App\Filament\Resources\BookingsResource\Pages;

use App\Filament\Resources\BookingsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBookings extends ListRecords
{
    protected static string $resource = BookingsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
