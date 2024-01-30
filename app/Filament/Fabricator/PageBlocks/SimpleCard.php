<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class SimpleCard extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('simple-card')
            ->schema([
                Repeater::make('cards')
                    ->schema([
                                TextInput::make("heading")
                                    ->label("Heading")
                                    ->maxLength(100)
                                    ->required(),
                                Textarea::make("content")
                                    ->label("Content")
                                    ->required(),
                                TextInput::make("btnLabel")
                                    ->label("Button Text")
                                    ->maxLength(100)
                                    ->required(),
                                TextInput::make("btnLink")
                                    ->label("Button Link")
                                    ->maxLength(255)
                                    ->required(),
                                TextInput::make("btnIcon")
                                    ->label("Button Icon")
                                    ->maxLength(100)
                                    ->required(),
                                FileUpload::make("image")
                                    ->directory("Image")
                                    ->required() ,
                    ])->maxItems(3)
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
