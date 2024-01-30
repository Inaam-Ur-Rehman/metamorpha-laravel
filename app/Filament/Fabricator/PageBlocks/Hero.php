<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Hero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('hero')
            ->schema([
                TextInput::make("heading")
                    ->label("Heading")
                    ->maxLength(100)
                    ->required(),
                TextInput::make("subHeading")
                    ->label("Sub Heading")
                    ->maxLength(100)
                    ->required(),
                TextInput::make("btnLabel")
                    ->label("Button Text")
                    ->maxLength(100)
                    ->required(),
                TextInput::make("btnLink")
                    ->label("Button Link")
                    ->maxLength(255)
                    ->required(),
                TextInput::make("text")
                    ->label("Text")
                    ->maxLength(200)
                    ->required(),
                FileUpload::make("poster")
                    ->directory("poster")
                ->required() ,
        FileUpload::make("video")
                    ->directory("videos")
                    ->maxSize("100000")
                ->required()


            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
