<?php

namespace App\Filament\Resources\DgiiRequestResource\Pages;

use App\Filament\Resources\DgiiRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDgiiRequests extends ListRecords
{
    protected static string $resource = DgiiRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
