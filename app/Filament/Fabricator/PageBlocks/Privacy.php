<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Privacy extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('privacy')
            ->schema([
                MarkdownEditor::make("content")
                    ->fileAttachmentsDirectory('privacy')
                    ->fileAttachmentsDisk('public')
                    ->required()
                    ->label("Content")
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
