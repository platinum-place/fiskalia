<?php

namespace App\Enums\DgiiRequest;

enum StatusEnum: int
{
    case inProcess = 1;

    case accepted = 2;

    case conditionallyAccepted = 3;

    case rejected = 4;

    case error = 5;

    public static function getValues(): array
    {
        return array_column(self::cases(), 'value');
    }
}
