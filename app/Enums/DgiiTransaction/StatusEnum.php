<?php

namespace App\Enums\DgiiTransaction;

use Filament\Support\Contracts\HasLabel;

enum StatusEnum: string implements HasLabel
{
    case IN_PROCESS = 'En proceso';
    case ACCEPTED = 'Aceptado';
    case CONDITIONALLY_ACCEPTED = 'Aceptado Condicional';
    case REJECTED = 'Rechazado';

    public function getLabel(): ?string
    {
        return __('enums.'.$this->value);
    }
}
