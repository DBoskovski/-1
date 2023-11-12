<?php

namespace App\Filament\Resources\ArchaeologicalPlaceResource\Pages;

use App\Filament\Resources\ArchaeologicalPlaceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArchaeologicalPlaces extends ListRecords
{
    protected static string $resource = ArchaeologicalPlaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
