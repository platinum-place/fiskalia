<?php

namespace DGII\API;

use Illuminate\Support\Facades\Facade;

class DGIIClient extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return Client::class;
    }
}
