<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;


class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(), //добавление и редактирование форм
                Textarea::make('description_small'),
                RichEditor::make('description')->columnSpanFull(),
                FileUpload::make('picture')->directory('blogs'),
                TextInput::make('status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table //для вывода
            ->columns([
                ImageColumn::make('picture'),
                TextColumn::make('name'),
                TextColumn::make('description_small'),
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
            'index' => Pages\ListBlogs::route('/'), // страница вывода
            'create' => Pages\CreateBlog::route('/create'), // страница создания
            'edit' => Pages\EditBlog::route('/{record}/edit'), // страница вывода
        ];
    }
}
