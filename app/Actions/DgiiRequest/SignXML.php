<?php

namespace App\Actions\DgiiRequest;

use Lorisleiva\Actions\Concerns\AsAction;

class SignXML
{
    use AsAction;

    public function handle(string $xml_content): string
    {
        return $xml_content;
    }
}
