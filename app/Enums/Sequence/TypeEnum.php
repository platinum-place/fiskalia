<?php

namespace App\Enums\Sequence;

use Filament\Support\Contracts\HasLabel;

enum TypeEnum: string implements HasLabel
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

    public function getLabel(): ?string
    {
        return __('enums.' . $this->value);
    }
}
