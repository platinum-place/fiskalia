<?php

namespace App\Enums\DgiiTransaction;

use Filament\Support\Contracts\HasLabel;

enum StatusEnum: int implements HasLabel
{
    case inProcess = 1;

    case accepted = 2;

    case conditionallyAccepted = 3;

    case rejected = 4;


    public function getLabel(): ?string
    {
        return __('enums.'.$this->name);
    }
}
