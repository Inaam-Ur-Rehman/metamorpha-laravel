<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
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
                Repeater::make('buttons')
                    ->schema([
                        TextInput::make('text')
                            ->label('Text')
                            ->required(),
                        TextInput::make('url')
                            ->label('URL')
                            ->required(),
                        TextInput::make('icon')
                            ->label('Icon')
                            ->default('arrow-right')
                    ])->minItems(1)->maxItems(2),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
