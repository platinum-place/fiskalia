<?php

namespace App\Actions\Sequence;

use App\Enums\Sequence\TypeEnum;
use Lorisleiva\Actions\Concerns\AsAction;

class GenerateXML
{
    use AsAction;

    public function handle(int $type)
    {
        return match ($type) {
            TypeEnum::fiscalInvoice->value => view('dgii-request.e-CF 31')->render(),
        };
    }
}
