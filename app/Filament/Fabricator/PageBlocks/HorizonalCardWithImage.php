<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HorizonalCardWithImage extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('horizonal-card-with-image')
            ->schema([
                TextInput::make("heading")
                    ->label("Heading")
                    ->maxLength(100)
                    ->required(),
                RichEditor::make("content")
                    ->label("Content")
                    ->required(),
                FileUpload::make("image")
                    ->directory("Image")
                    ->image()
                    ->required(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->label('Price'),

                Repeater::make("buttons")
                    ->schema([
                        Select::make('type')->required()->options([
                            'primary' => 'Primary',
                            'secondary' => 'Secondary',
                        ]),
                        TextInput::make("label")
                            ->label("Button Text")
                            ->maxLength(100)
                            ->required(),
                        TextInput::make("link")
                            ->label("Button Link")
                            ->maxLength(255)
                            ->required(),
                        TextInput::make("icon")
                            ->label("Button Icon")
                            ->maxLength(100)
                            ->required(),
                    ])->maxItems(2)
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
