<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\RichEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Privacy extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('privacy')
            ->schema([
                RichEditor::make("content")
                    ->required()
                    ->label("Content")
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
