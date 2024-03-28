<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookedEventsResource\Pages;
use App\Filament\Resources\BookedEventsResource\RelationManagers;
use App\Models\BookedEvents;
use App\Models\Events;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookedEventsResource extends Resource
{
    protected static ?string $model = BookedEvents::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('event_id')
                    ->label('Event')
                    ->live()
                    ->options(
                        Events::query()
                            ->pluck('title', 'id')
                            ->toArray()
                    ),
                Forms\Components\Select::make('title')
                    ->label('Title')
                    ->options(Events::query()
                        ->pluck('title', 'title')
                        ->toArray()
                    )
                    ->required(),
                Forms\Components\TextInput::make('date')
                    ->label('Date')
                    ->type('date')
                    ->required(),
                Forms\Components\TextInput::make('first_name')
                    ->label('First Name')
                    ->required(),
                Forms\Components\TextInput::make('last_name')
                    ->label('Last Name')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->required(),
                Forms\Components\TextInput::make('street')
                    ->label('Street')
                    ->required(),
                Forms\Components\TextInput::make('postal_code')
                    ->label('Postal Code')
                    ->required(),
                Forms\Components\TextInput::make('country')
                    ->label('Country')
                    ->required(),
                Forms\Components\TextInput::make('phone')
                    ->label('Phone')
                    ->required(),
                Forms\Components\Select::make('job')
                    ->options([
                        'werknemer' => 'Ik ben werknemer',
                        'zelfstandig ondernemer' => 'Ik ben zelfstandig ondernemer',
                        'andere' => 'Andere',

                    ])
                    ->label('Job'),
                Forms\Components\TextInput::make('company')
                    ->label('Company'),
                Forms\Components\TextInput::make('billing_address')
                    ->label('Billing Address'),
                Forms\Components\TextInput::make('vat_number')
                    ->label('Vat Number'),
                Forms\Components\Checkbox::make('kmo')
                    ->label('Kmo'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('first_name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListBookedEvents::route('/'),
            'create' => Pages\CreateBookedEvents::route('/create'),
            'edit' => Pages\EditBookedEvents::route('/{record}/edit'),
        ];
    }
}
