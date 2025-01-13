<?php

namespace App\Filament\Resources\CertResource\Pages;

use App\Filament\Resources\CertResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCert extends ViewRecord
{
    protected static string $resource = CertResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
