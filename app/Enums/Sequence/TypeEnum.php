<?php

namespace App\Enums\Sequence;

use Filament\Support\Contracts\HasLabel;

enum TypeEnum: int implements HasLabel
{
    case FISCAL_INVOICE = 31;

    case CONSUME_INVOICE = 32;

    case DEBIT_NOTE = 33;

    case CREDIT_NOTE = 34;

    case E_PURCHASES = 41;

    case MINOR_EXPENSE = 43;

    case SPECIAL_REGIME = 44;

    case E_GOVERNMENT = 45;

    case E_EXPORTS = 46;

    case FOREIGN_PAYMENTS = 47;

    public function getLabel(): ?string
    {
        return __('enums.'.$this->name);
    }
}
