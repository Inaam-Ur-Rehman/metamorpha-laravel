<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class LogoWithContent extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('logo-with-content')
            ->schema([
                RichEditor::make('content')
                ->required(),
                FileUpload::make('logo')
                ->image()
                ->required()
                ->directory('team')
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
