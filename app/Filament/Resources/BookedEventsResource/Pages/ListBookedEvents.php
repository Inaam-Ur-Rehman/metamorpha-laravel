<?php

namespace App\Filament\Resources\BookedEventsResource\Pages;

use App\Filament\Resources\BookedEventsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBookedEvents extends ListRecords
{
    protected static string $resource = BookedEventsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
