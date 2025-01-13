<?php

namespace App\Filament\Resources\CertResource\Pages;

use App\Filament\Resources\CertResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCert extends EditRecord
{
    protected static string $resource = CertResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
