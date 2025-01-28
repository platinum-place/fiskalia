<?php

namespace App\Enums\DgiiRequest;

use App\Enums\HasIntCaseValue;

enum StatusEnum: int
{
    use HasIntCaseValue;

    case inProcess = 1;

    case accepted = 2;

    case conditionallyAccepted = 3;

    case rejected = 4;
}
