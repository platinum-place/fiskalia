<?php

namespace App\Actions\Sequence;

use App\Enums\Sequence\StatusEnum;
use App\Models\Sequence;
use Carbon\Carbon;
use Lorisleiva\Actions\Concerns\AsAction;
use Mockery\Exception;

class GetCurrentSequence
{
    use AsAction;

    public function handle(int $sequenceNumberType)
    {
        $current = Sequence::where('type', $sequenceNumberType)
            ->whereDate('due_date', '>=', Carbon::now())
            ->where('status', StatusEnum::CURRENT)
            ->orderByDesc('created_at')
            ->get()
            ->first();

        if (empty($current)) {
            throw new Exception(__('No sequences available'));
        }

        return $current;
    }
}
