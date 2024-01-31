<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TextWithLogo extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('text-with-logo')
            ->schema([
                RichEditor::make('content')
                    ->label('Content')
                    ->required(),
                FileUpload::make('image')
                    ->label('Image')
                    ->directory('images')
                    ->image()
                    ->required()
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
