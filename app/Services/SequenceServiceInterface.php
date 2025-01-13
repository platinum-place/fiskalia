<?php

namespace App\Services;

use App\Models\Sequence;

interface SequenceServiceInterface
{
    public function getNextSequence(int $typeValue): Sequence;
}
