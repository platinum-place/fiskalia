<?php

namespace App\Enums\Sequence;
use Filament\Support\Contracts\HasLabel;

enum StatusEnum:  string implements HasLabel
{
    case CURRENT = 'current';

    case RESERVE = 'reserve';

    public function getLabel(): ?string
    {
        return __('enums.' . $this->value);
    }
}
