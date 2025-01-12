<?php

namespace App\Enums;

use Exception;

trait HasIntCaseValue
{
    public static function getFromValue(int $value): Exception|self
    {
        foreach (self::cases() as $case) {
            if ($case->value === $value) {
                return $case;
            }
        }

        throw new Exception(__(':name not Found', ['name' => __('Value')]));
    }
}
