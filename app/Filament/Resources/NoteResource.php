<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NoteResource\Pages;
use App\Filament\Resources\NoteResource\RelationManagers;
use App\Models\Note;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class NoteResource extends Resource
{
    protected static ?string $model = Note::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('time')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('oror')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('names')
                    ->required()
                    ->maxLength(50),
                Forms\Components\TextInput::make('agriment')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('time')->sortable()->searchable(),
                TextColumn::make('oror')->sortable()->searchable(),
                TextColumn::make('names')->sortable()->searchable(),
                TextColumn::make('agriment')->sortable()->searchable(),
                TextColumn::make('content')->sortable()->searchable(),
                TextColumn::make('created_at')->dateTime(),
                TextColumn::make('updated_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public function calculateDonation($type, $namesCount) {
        $prices = [
            'обедня' => 6,
            'молебен' => 12,
            'панихида' => 12,
            'сорокоуст' => 25,
            'сорокоуст_полгода' => 40,
            'сорокоуст_год' => 80,
            'акафист_владимир' => 20,
            'акафист_александр' => 20,
            'акафист_целительница' => 20,
            'акафист_николай' => 20,
            'акафист_всецарица' => 20,
            'акафист_неупиваемая_чаша' => 20,
        ];

        return $prices[$type] * $namesCount;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNotes::route('/'),
            'create' => Pages\CreateNote::route('/create'),
            'edit' => Pages\EditNote::route('/{record}/edit'),
        ];
    }
}
