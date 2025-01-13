<?php

namespace App\Enums\Sequence;

use App\Enums\HasFilamentFunctions;
use App\Enums\HasIntCaseValue;
use Filament\Support\Contracts\HasLabel;

enum StatusEnum: int implements HasLabel
{
    use HasFilamentFunctions, HasIntCaseValue;

    case current = 1;

    case reserve = 2;
}
