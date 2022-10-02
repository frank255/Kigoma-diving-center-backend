<?php

namespace App\Filament\Resources\BookingsResource\Pages;

use App\Filament\Resources\BookingsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBookings extends CreateRecord
{
    protected static string $resource = BookingsResource::class;
}
