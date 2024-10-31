<?php

namespace App\Filament\Resources\AlumniControllerResource\Pages;

use App\Filament\Resources\AlumniControllerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlumniController extends EditRecord
{
    protected static string $resource = AlumniControllerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
