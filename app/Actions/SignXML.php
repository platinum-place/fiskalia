<?php

namespace App\Actions;

use Lorisleiva\Actions\Concerns\AsAction;

class SignXML
{
    use AsAction;

    public function handle(string $xml): string
    {
        return $xml;
    }
}
