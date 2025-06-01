<?php

namespace DGII\Signer;

use Illuminate\Support\Facades\Facade;

class DGIISigner extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return SignManager::class;
    }
}
