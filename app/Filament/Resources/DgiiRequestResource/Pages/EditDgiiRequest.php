<?php

namespace App\Filament\Resources\DgiiRequestResource\Pages;

use App\Filament\Resources\DgiiRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDgiiRequest extends EditRecord
{
    protected static string $resource = DgiiRequestResource::class;

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
