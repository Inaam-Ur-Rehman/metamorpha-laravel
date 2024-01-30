<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class InspiratieCard extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('inspiratie-card')
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->label('Title'),
                TextInput::make('subtitle')
                    ->required()
                    ->label('Subtitle'),
                TextInput::make('text')
                    ->required()
                    ->label('Text'),
                TextInput::make('btnText')
                    ->required()
                    ->label('Button text'),
                TextInput::make('btnLink')
                    ->required()
                    ->label('Button link'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
