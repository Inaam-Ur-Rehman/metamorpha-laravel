<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('first_name')
                    ->autofocus()
                    ->required()
                    ->maxLength(255)
                    ->placeholder(__('First name')),
                TextInput::make('last_name')
                    ->required()
                    ->maxLength(255)
                    ->placeholder(__('Last name')),
                TextInput::make('email')
                    ->required()
                    ->email()
                    ->maxLength(255)
                    ->placeholder(__('Email')),
                TextInput::make('country')
                    ->required()
                    ->maxLength(255)
                    ->placeholder(__('Country')),
                TextInput::make('city')
                    ->required()
                    ->maxLength(255)
                    ->placeholder(__('City')),
                TextInput::make('street')
                    ->required()
                    ->maxLength(255)
                    ->placeholder(__('Street')),
                TextInput::make('house_number')
                    ->required()
                    ->maxLength(255)
                    ->placeholder(__('House number')),
                TextInput::make('postal_code')
                    ->required()
                    ->maxLength(255)
                    ->placeholder(__('Postal code')),
                TextInput::make('company')
                    ->maxLength(255)
                    ->placeholder(__('Company')),
                TextInput::make('company_number')
                    ->maxLength(255)
                    ->placeholder(__('Company Number')),
                TextInput::make('quantity')
                    ->maxLength(255)
                    ->placeholder(__('Quantity')),
                TextInput::make('order_id')
                    ->required()
                    ->maxLength(255)
                    ->placeholder(__('Order id')),
                TextInput::make('paid_at')
                    ->required()
                    ->maxLength(255)
                    ->placeholder(__('Paid at')),
                TextInput::make('transaction_id')
                    ->required()
                    ->maxLength(255)
                    ->placeholder(__('Transaction id')),
                TextInput::make('payment_method')
                    ->required()
                    ->maxLength(255)
                    ->placeholder(__('Payment method')),
                TextInput::make('payment_status')
                    ->required()
                    ->maxLength(255)
                    ->placeholder(__('Payment status')),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('last_name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('email')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
