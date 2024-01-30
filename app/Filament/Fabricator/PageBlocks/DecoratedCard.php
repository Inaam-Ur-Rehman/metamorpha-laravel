<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class DecoratedCard extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('decorated-card')
            ->schema([
                Repeater::make('cards')
                ->label('Cards')
                ->schema([
                    FileUpload::make('image')
                        ->image()
                        ->directory('images')
                        ->required(),
                    TextInput::make('title')
                        ->label('Title')
                        ->required(),
                    ColorPicker::make('title_bg')
                        ->label('Title Background Color')
                        ->required(),
                    TextInput::make('content')
                        ->label('Content')
                        ->required(),
                    TextInput::make('link')
                        ->label('Link')
                        ->required(),
                    ColorPicker::make('color')
                        ->label('Color')
                        ->required(),
                ])->maxItems(4)
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
