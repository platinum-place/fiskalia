<?php

namespace App\Actions\DgiiRequest;

use Lorisleiva\Actions\Concerns\AsAction;

class SignFCXML
{
    use AsAction;

    public function handle(array $data, string $securityCode): string
    {
        $xml = view('dgii-request.e-CF 31', $data)->render();

        return SignXML::run($xml);
    }
}
