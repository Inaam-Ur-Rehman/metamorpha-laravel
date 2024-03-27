<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;


class EventsHero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('events-hero')
            ->schema([
                TextInput::make('heading')
                    ->label('Heading')
                    ->placeholder('Enter a heading'),
                TextArea::make('content')
                    ->label('Content')
                    ->placeholder('Enter some content'),
                TextInput::make('cta')
                    ->label('CTA')
                    ->placeholder('Enter a CTA'),
                TextInput::make('cta_url')
                    ->label('CTA URL')
                    ->placeholder('Enter a CTA URL'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}