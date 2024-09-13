<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FotoCatalogResource\Pages;
use App\Filament\Resources\FotoCatalogResource\RelationManagers;
use App\Models\FotoCatalog;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;

class FotoCatalogResource extends Resource
{
    protected static ?string $model = FotoCatalog::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                RichEditor::make('description')->columnSpan('2'),
                TextInput::make('category'),
                FileUpload::make('url'),
                TextInput::make('tags')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('tags'),
                TextColumn::make('category'),
                ImageColumn::make('url')
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFotoCatalogs::route('/'),
            'create' => Pages\CreateFotoCatalog::route('/create'),
            'edit' => Pages\EditFotoCatalog::route('/{record}/edit'),
        ];
    }
}
