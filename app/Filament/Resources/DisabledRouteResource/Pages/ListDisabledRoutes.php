<?php

namespace App\Filament\Resources\DisabledRouteResource\Pages;

use App\Filament\Resources\DisabledRouteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDisabledRoutes extends ListRecords
{
    protected static string $resource = DisabledRouteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
