<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Paper extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('paper')
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->label('Title'),
                TextInput::make('text')
                    ->required()
                    ->label('Text'),
                FileUpload::make('image')
                    ->required()
                    ->label('image'),
                TextInput::make('link')
                    ->required()
                    ->label('Link'),

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
