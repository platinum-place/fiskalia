<?php

namespace App\Filament\Resources\DgiiRequestResource\Pages;

use App\Filament\Resources\DgiiRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDgiiRequest extends ViewRecord
{
    protected static string $resource = DgiiRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
