<?php

namespace App\Services;

use App\Models\Sequence;

interface SequenceServiceInterface
{
    public function getNextSequence(int $type_value): Sequence;
}
