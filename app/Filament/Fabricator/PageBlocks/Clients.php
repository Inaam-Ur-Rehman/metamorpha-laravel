<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;

class Clients extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('clients')
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->placeholder('Enter title')
                    ->rules('required'),
                Repeater::make('clients')
                    ->schema([
                        FileUpload::make('logo')
                            ->image()
                            ->maxFiles(1)
                            ->rules('required'),
                    ]),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}