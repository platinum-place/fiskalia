<?php

namespace App\Actions\Sequence;

use App\Models\Sequence;
use Lorisleiva\Actions\Concerns\AsAction;
use mysql_xdevapi\Exception;

class GenerateNextSequenceNumber
{
    use AsAction;

    public function handle(Sequence $sequence)
    {
        $currentNumber = $sequence->current_number;
        $currentNumber++;

        if (! ($currentNumber > $sequence->range_start and $currentNumber < $sequence->range_end)) {
            throw new Exception(__('Sequence number out of range'));
        }

        $sequenceNumber = str_pad($currentNumber, $sequence->length, '0', STR_PAD_LEFT);
        $sequenceNumber = $sequence->series.$sequence->type->value.$sequenceNumber;

        $sequence->update(['current_number' => $currentNumber]);

        return $sequenceNumber;
    }
}
