<?php

namespace App\Enums\Sequence;

use Filament\Support\Contracts\HasLabel;

enum TypeEnum: int implements HasLabel
{
    case FISCALINVOICE = 31;

    case CONSUMEINVOICE = 32;

    case DEBITNOTE = 33;

    case CREDITNOTE = 34;

    case EPURCHASES = 41;

    case MINOREXPENSE = 43;

    case SPECIALREGIME = 44;

    case EGOVERNMENT = 45;

    case EEXPORTS = 46;

    case FOREIGNPAYMENTS = 47;

    public function getLabel(): ?string
    {
        return __('enums.'.$this->name);
    }
}
