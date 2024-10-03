<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WeekDaysResource\Pages;
use App\Filament\Resources\WeekDaysResource\RelationManagers;
use App\Models\WeekDay;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class WeekDaysResource extends Resource
{
    protected static ?string $model = WeekDay::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('day')->required(),
                TextInput::make('day_week')->required(),
                TextInput::make('clock')->required(),
                TextInput::make('liturgy')->required(),
                TextInput::make('moleben')->required(),
                TextInput::make('servise')->required(),
                TextInput::make('week_id')->required(),
                TextInput::make('month')->required(),
                TextInput::make('liturgi_evening')->required(),
                TextInput::make('bdenie')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('day'),
                TextColumn::make('day_week'),
                TextColumn::make('clock'),
                TextColumn::make('liturgy'),
                TextColumn::make('moleben'),
                TextColumn::make('servise'),
                TextColumn::make('week_id'),
                TextColumn::make('month'),
                TextColumn::make('liturgi_evening'),
                TextColumn::make('bdenie'),
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
            'index' => Pages\ListWeekDays::route('/'),
            'create' => Pages\CreateWeekDays::route('/create'),
            'edit' => Pages\EditWeekDays::route('/{record}/edit'),
        ];
    }
}
