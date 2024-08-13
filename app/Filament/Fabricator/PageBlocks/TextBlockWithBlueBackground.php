<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TextBlockWithBlueBackground extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('text_block_with_blue_background')
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),
                RichEditor::make('description')
                    ->label('Description')
                    ->required(),
                    FileUpload::make('logo1')
                    ->label('First Logo')
                    ->required()
                    ->image()
                    ->maxSize(1024),
                    FileUpload::make('logo2')
                    ->label('Second Logo')
                    ->required()
                    ->image()
                    ->maxSize(1024),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
