<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DisabledRouteResource\Pages;
use App\Filament\Resources\DisabledRouteResource\RelationManagers;
use App\Models\DisabledRoute;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BoolenColumn;
use Filament\Forms\Components\Checkbox;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DisabledRouteResource extends Resource
{
    protected static ?string $model = DisabledRoute::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('route')
                    ->label('Route')
                    ->required()
                    ->unique(DisabledRoute::class,'route',ignoreRecord: true)
                    ->helperText('The route should not be start with /.')
                    ->placeholder('e.g. example'),
                Checkbox::make('disabled')
                    ->label('Disabled'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('route')
                    ->label('Route')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('disabled')
                    ->label('Disabled')
                    ->color(fn (string $state): string => match ($state) {
                        '1' => 'red',
                        '0' => 'green',
                        default => 'gray',
                    })
                    ->format(fn (string $state): string => match ($state) {
                        '1' => 'Disabled',
                        '0' => 'Enabled',
                        default => 'Unknown',
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDisabledRoutes::route('/'),
            'create' => Pages\CreateDisabledRoute::route('/create'),
            'edit' => Pages\EditDisabledRoute::route('/{record}/edit'),
        ];
    }
}
