<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class BlueBackgroundSectionWithButton extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('blue-background-section-with-button')
            ->schema([
                RichEditor::make('content')
                    ->label('Content')
                    ->required(),
                TextInput::make('button_text')
                    ->label('Button Text')
                    ->required(),
                TextInput::make('button_link')
                    ->label('Button Link')
                    ->required(),
                TextInput::make('icon')
                    ->label('Icon')
                    ->required(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
