<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class CEOSection extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('c-e-o-section')
            ->schema([
                TextInput::make('title')
                    ->label('Title'),
                TextInput::make('name')
                    ->label('Name'),
                TextInput::make('company')
                    ->label('Company'),
                RichEditor::make('content')
                    ->label('Content'),
                FileUpload::make('image')
                    ->image()
                    ->label('Image'),
                RichEditor::make('more_content')
                    ->label('More Content'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
