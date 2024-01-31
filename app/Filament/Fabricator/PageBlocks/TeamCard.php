<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TeamCard extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('team-card')
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required(),
                ColorPicker::make('color')
                    ->label('Color')
                    ->default('#000000'),
                RichEditor::make('content')
                    ->label('Content')
                    ->required(),
                RichEditor::make('more_content')
                    ->label('More Content'),
                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->required()
                    ->directory('team'),
                Select::make('direction')
                    ->label('Direction')
                    ->options([
                        'left' => 'Left',
                        'right' => 'Right'
                    ])
                    ->default('left')

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
