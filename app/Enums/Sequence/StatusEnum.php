<?php

namespace App\Enums\Sequence;

enum StatusEnum: string
{
    case CURRENT = 'current';

    case RESERVE = 'reserve';
}
