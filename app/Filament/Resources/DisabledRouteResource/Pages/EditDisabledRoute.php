<?php

namespace App\Filament\Resources\DisabledRouteResource\Pages;

use App\Filament\Resources\DisabledRouteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDisabledRoute extends EditRecord
{
    protected static string $resource = DisabledRouteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
