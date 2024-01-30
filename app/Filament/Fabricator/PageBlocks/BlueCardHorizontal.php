<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class BlueCardHorizontal extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('blue-card-horizontal')
            ->schema([
                RichEditor::make('content')
                    ->label('Content'),
                FileUpload::make('image')
                    ->image()
                    ->label('Image'),

                Select::make('direction')
                    ->options([
                        'left' => 'Left',
                        'right' => 'Right',
                    ])
                    ->default('left')
                    ->label('Direction'),
                TextInput::make('button_text')
                    ->label('Button Text'),
                TextInput::make('button_url')
                    ->label('Button URL'),
                TextInput::make('button_icon')
                    ->label('Button Icon'),

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
