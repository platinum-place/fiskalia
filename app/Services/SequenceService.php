<?php

namespace App\Services;

use App\Actions\Sequence\ActiveReserveSequence;
use App\Actions\Sequence\GetCurrentSequence;
use App\Enums\Sequence\TypeEnum;
use App\Models\Sequence;
use Exception;

class SequenceService implements SequenceServiceInterface
{
    public function getNextSequence(int $typeValue): Sequence
    {
        $type = TypeEnum::getFromValue($typeValue);

        $sequence = GetCurrentSequence::run($type);

        if ($sequence->next_number > $sequence->range_end) {
            ActiveReserveSequence::run($sequence);

            throw new Exception(__('Sequence number out of range'));
        }

        return $sequence;
    }
}
