<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventsResource\Pages;
use App\Filament\Resources\EventsResource\RelationManagers;
use App\Models\Events;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class EventsResource extends Resource
{
    protected static ?string $model = Events::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                ->label('Title')
                ->required()
                    ->maxLength(255)
                    ->afterStateUpdated(
                        function (string $operation, $state, Forms\Set $set) {
                            if ($operation === "edit") {
                                return;
                            }
                            $set("slug", Str::slug($state));
                        }
                    )->debounce(2000),
                Forms\Components\TextInput::make('slug')->label('Slug')->required()->unique(Events::class,'slug',ignoreRecord: true),
                Forms\Components\TextInput::make('subTitle')->label('Sub Title')->required(),
                Forms\Components\Textarea::make('excerpt')->label('Summary')->required(),
                Forms\Components\Section::make('Thumbnail and Video')->schema([
                    Forms\Components\FileUpload::make('thumbnail')->label('Thumbnail')
                        ->disk('public')->directory('events')->required(),
                    Forms\Components\FileUpload::make('video')->label('Video')
                        ->directory('events')->disk('public'),
                ])->collapsible()->columns(2),
                Forms\Components\Section::make('Event Dates')->schema([
                    Forms\Components\DatePicker::make('startDate')->label('Start Date')->required(),
                    Forms\Components\DatePicker::make('endDate')->label('End Date')->required(),
                ])->columns(2)->collapsible(),
                // optional fields
                Forms\Components\Section::make('Banner Block')->schema([
                    Forms\Components\FileUpload::make('bannerImage')->label('Banner Image')
                        ->disk('public')->directory('events'),
                    Forms\Components\MarkdownEditor::make('bannerText')->label('Banner Text (use    ==divide==    to split the text into two parts)'),
                ])->collapsible(),
                TinyEditor::make('description')->profile('default')->label('Description')->required()->columnSpanFull()->fileAttachmentsDisk('public')->fileAttachmentsVisibility('public')->fileAttachmentsDirectory('uploads'),
                Forms\Components\Checkbox::make("status")->default(false)->label("Active ?"),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                ->sortable()
                ->searchable()
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvents::route('/create'),
            'edit' => Pages\EditEvents::route('/{record}/edit'),
        ];
    }
}
