<?php

namespace App\Filament\Resources\FotoCatalogResource\Pages;

use App\Filament\Resources\FotoCatalogResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFotoCatalog extends EditRecord
{
    protected static string $resource = FotoCatalogResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
