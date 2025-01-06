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
        $sequences = Sequence::where('type', $sequenceNumberType)
            ->whereDate('due_date', '>=', Carbon::now())
            ->whereIn('status', [StatusEnum::CURRENT, StatusEnum::RESERVE])
            ->orderByDesc('created_at')
            ->get();

        $current = $sequences->firstWhere('status', StatusEnum::CURRENT);
        $reserve = $sequences->firstWhere('status', StatusEnum::RESERVE);

        if (empty($current) and !empty($reserve)) {
            throw new Exception(__('No sequences available'));
        }

        return $current ?? $reserve;
    }
}
