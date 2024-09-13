<?php

namespace App\Filament\Resources\FotoCatalogResource\Pages;

use App\Filament\Resources\FotoCatalogResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFotoCatalogs extends ListRecords
{
    protected static string $resource = FotoCatalogResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
