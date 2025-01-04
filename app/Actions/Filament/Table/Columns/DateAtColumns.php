<?php

namespace App\Actions\Filament\Table\Columns;

use Lorisleiva\Actions\Concerns\AsAction;
use Filament\Tables;

class DateAtColumns
{
    use AsAction;

    public function handle(?array $columns = [])
    {
        return array_merge([
            Tables\Columns\TextColumn::make('created_at')
                ->translateLabel()
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('updated_at')
                ->translateLabel()
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
            Tables\Columns\TextColumn::make('deleted_at')
                ->translateLabel()
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ], $columns);
    }
}
