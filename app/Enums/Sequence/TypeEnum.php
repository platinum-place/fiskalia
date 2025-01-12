<?php

namespace App\Enums\Sequence;

use Filament\Support\Contracts\HasLabel;

enum TypeEnum: int implements HasLabel
{
    case fiscalInvoice = 31;

    case consumeInvoice = 32;

    case debitNote = 33;

    case creditNote = 34;

    case ePurchases = 41;

    case minorExpense = 43;

    case specialRegime = 44;

    case eGovernment = 45;

    case eExports = 46;

    case foreignPayments = 47;


    public function getLabel(): ?string
    {
        return __('enums.' . $this->name);
    }
}
