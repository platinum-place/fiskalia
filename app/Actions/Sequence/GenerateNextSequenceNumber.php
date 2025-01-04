<?php

namespace App\Actions\Sequence;

use App\Models\Sequence;
use Lorisleiva\Actions\Concerns\AsAction;

class GenerateNextSequenceNumber
{
    use AsAction;

    public function handle(Sequence $sequence)
    {
        $currentNumber = (int)$sequence->current_number;
        $currentNumber++;
        $sequence->current_number = str_pad($currentNumber, $sequence->length, '0', STR_PAD_LEFT);
        $sequence->save();
    }
}
