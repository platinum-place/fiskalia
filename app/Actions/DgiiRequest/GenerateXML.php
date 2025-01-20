<?php

namespace App\Actions\DgiiRequest;

use App\Enums\DgiiRequest\TypeEnum;
use Lorisleiva\Actions\Concerns\AsAction;
use Throwable;

class GenerateXML
{
    use AsAction;

    /**
     * @throws Throwable
     */
    public function handle(TypeEnum $type, array $data): string
    {
        return match ($type) {
            TypeEnum::fiscalInvoice => view('dgii-request.e-CF 31', $data)->render(),
        };
    }
}
