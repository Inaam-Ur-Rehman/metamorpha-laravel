<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class BooksSection extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('books-section')
            ->schema([
                TextInput::make('title')
                    ->label('Title'),
                TextInput::make('subtitle')
                    ->label('Subtitle'),
                TextInput::make('second_title')
                    ->label('Second Title'),
                RichEditor::make('content')
                    ->label('Content'),
                Repeater::make('books')
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->directory('books')
                            ->required(),
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('link')
                            ->required()
                    ])->maxItems(2)->minItems(2)
            ]);
    }
    public static function mutateData(array $data): array
    {
        return $data;
    }
}
