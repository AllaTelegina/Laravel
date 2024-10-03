<?php

namespace App\Filament\Resources\WeekDaysResource\Pages;

use App\Filament\Resources\WeekDaysResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWeekDays extends ListRecords
{
    protected static string $resource = WeekDaysResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
