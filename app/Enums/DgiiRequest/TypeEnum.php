<?php

namespace App\Enums\DgiiRequest;

use App\Enums\HasIntCaseValue;

enum TypeEnum: int
{
    use HasIntCaseValue;

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
}
