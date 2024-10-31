<?php

namespace App\Filament\Resources\AlumnisResource\Pages;

use App\Filament\Resources\AlumnisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlumnis extends EditRecord
{
    protected static string $resource = AlumnisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
