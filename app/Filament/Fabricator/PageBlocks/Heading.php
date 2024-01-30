<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Heading extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('heading')
            ->schema([
                TextInput::make('heading')
                    ->required(),
                ColorPicker::make('color')
                    ->default('#000000')
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
