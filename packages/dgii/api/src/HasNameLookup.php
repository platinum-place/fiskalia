<?php

namespace DGII\API;

trait HasNameLookup
{
    public static function fromName(string $name): ?self
    {
        return array_find(self::cases(), fn ($case) => $case->name === $name);
    }
}
