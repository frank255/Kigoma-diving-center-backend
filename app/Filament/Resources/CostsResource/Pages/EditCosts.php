<?php

namespace App\Filament\Resources\CostsResource\Pages;

use App\Filament\Resources\CostsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCosts extends EditRecord
{
    protected static string $resource = CostsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
