<?php

namespace App\Filament\Resources\WeekDaysResource\Pages;

use App\Filament\Resources\WeekDaysResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWeekDays extends EditRecord
{
    protected static string $resource = WeekDaysResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
