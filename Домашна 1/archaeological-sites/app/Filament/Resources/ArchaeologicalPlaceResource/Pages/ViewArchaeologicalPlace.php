<?php

namespace App\Filament\Resources\ArchaeologicalPlaceResource\Pages;

use App\Filament\Resources\ArchaeologicalPlaceResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewArchaeologicalPlace extends ViewRecord
{
    protected static string $resource = ArchaeologicalPlaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
