<?php

namespace App\Filament\Resources\SequenceResource\Pages;

use App\Filament\Resources\SequenceResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSequence extends ViewRecord
{
    protected static string $resource = SequenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
