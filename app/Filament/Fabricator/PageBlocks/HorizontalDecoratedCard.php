<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HorizontalDecoratedCard extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('horizontal-decorated-card')
            ->schema([
                FileUpload::make('image')
                    ->image()
                    ->label('Image')
                    ->directory('images')
                    ->required(),
                RichEditor::make('content')
                    ->label('Content')
                    ->required(),
                TextInput::make('vertical_title')
                    ->label('Vertical Title')
                    ->required(),
                TextInput::make("tag_id")
                    ->label("Tag ID")
                    ->required(),
                Select::make('direction')
                    ->label('Direction')
                    ->options([
                        'left' => 'Left',
                        'right' => 'Right',
                    ])
                    ->default('left')
                    ->required(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
