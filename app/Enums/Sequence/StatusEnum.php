<?php

namespace App\Enums\Sequence;

use Filament\Support\Contracts\HasLabel;

enum StatusEnum: int implements HasLabel
{
    case current = 1;

    case reserve = 2;

    public function getLabel(): ?string
    {
        return __('enums.' . $this->name);
    }
}
