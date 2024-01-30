<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaperResource\Pages;
use App\Filament\Resources\PaperResource\RelationManagers;
use App\Models\Paper;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Closure;
use Filament\Tables\Columns\TextColumn;

class PaperResource extends Resource
{
    protected static ?string $model = Paper::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->image()
                    ->required()
                    ->directory('papers'),
                FileUpload::make('file')
                    ->required()
                    ->directory('papers'),
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    // generate slug from title
                    ->afterStateUpdated(
                        function (string $operation, $state, Forms\Set $set) {
                            if ($operation === "edit") {
                                return;
                            }
                            $set("slug", Str::slug($state));
                        }
                    )->debounce(5000)
                    ->placeholder("Title"),
                TextInput::make('slug')
                    ->required()
                    ->unique(Paper::class, 'slug', ignoreRecord: true)
                    ->alphaDash()
                    ->placeholder("Slug"),
                TextInput::make('desc')
                    ->required()
                    ->placeholder("Description"),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()

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
            'index' => Pages\ListPapers::route('/'),
            'create' => Pages\CreatePaper::route('/create'),
            'edit' => Pages\EditPaper::route('/{record}/edit'),
        ];
    }
}
