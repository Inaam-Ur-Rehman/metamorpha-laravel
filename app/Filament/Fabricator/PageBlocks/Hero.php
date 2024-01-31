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
                    ->required()
                    ->maxLength(255),
                TextInput::make("subHeading")
                    ->label("Sub Heading")
                    ->required()
                    ->maxLength(255),
                // btnLabel,btnLink,text,video,poster
                TextInput::make("btnLabel")
                    ->label("Button Label")
                    ->required()
                    ->maxLength(255),
                TextInput::make("btnLink")
                    ->label("Button Link")
                    ->required()
                    ->maxLength(255),
                TextInput::make("text")
                    ->label("Text")
                    ->required()
                    ->maxLength(255),
                FileUpload::make("video")
                    ->label("Video")
                    ->required(),
                FileUpload::make("poster")
                    ->label("Poster")
                    ->required()
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
