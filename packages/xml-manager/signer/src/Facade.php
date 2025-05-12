<?php

namespace XMLManager\Signer;

use Illuminate\Support\Facades\Facade as LaravelFacade;

class Facade extends LaravelFacade
{
    public static function getFacadeAccessor(): string
    {
        return SignManager::class;
    }
}
