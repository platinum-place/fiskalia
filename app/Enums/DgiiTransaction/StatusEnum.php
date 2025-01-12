<?php

namespace App\Enums\DgiiTransaction;

use App\Enums\HasIntCaseValue;
use App\Enums\HasFilamentFunctions;
use Filament\Support\Contracts\HasLabel;

enum StatusEnum: int implements HasLabel
{
    use HasFilamentFunctions, HasIntCaseValue;

    case inProcess = 1;

    case accepted = 2;

    case conditionallyAccepted = 3;

    case rejected = 4;
}
