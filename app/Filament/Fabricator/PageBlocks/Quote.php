<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Quote extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('quote')
            ->schema([
                TextInput::make('quote')
                    ->placeholder('Quote')
                    ->required(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
