<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TestimonialCard extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('testimonial-card')
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required(),
                TextInput::make('role')
                    ->label('Role')
                    ->required(),
                Textarea::make('testimonial')
                    ->label('Text')
                    ->required(),
                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->required(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
