<?php

namespace App\Enums\Sequence;

enum TypeEnum:string
{
    case FISCALINVOICE = 'fiscalinvoice';

    case CONSUMEINVOICE = 'consumeinvoice';

    case DEBITNOTE = 'debitnote';

    case CREDITNOTE = 'creditnote';

    case EPURCHASES = 'e-purchases';

    case MINOREXPENSE = 'minorexpense';

    case SPECIALREGIME = 'specialregime';

    case EGOVERNMENT = 'e-government';

    case EEXPORTS = 'e-exports';

    case FOREIGNPAYMENTS = 'e-foreignpayments';
}
