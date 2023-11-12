<?php

namespace App\Filament\Resources\ArchaeologicalPlaceResource\Pages;

use App\Filament\Resources\ArchaeologicalPlaceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArchaeologicalPlace extends EditRecord
{
    protected static string $resource = ArchaeologicalPlaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
