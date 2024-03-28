<?php

namespace App\Filament\Resources\BookedEventsResource\Pages;

use App\Filament\Resources\BookedEventsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBookedEvents extends EditRecord
{
    protected static string $resource = BookedEventsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
