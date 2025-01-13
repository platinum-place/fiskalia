<?php

namespace App\Actions\Sequence;

use App\Enums\Sequence\StatusEnum;
use App\Enums\Sequence\TypeEnum;
use App\Models\Sequence;
use Carbon\Carbon;
use Lorisleiva\Actions\Concerns\AsAction;
use Mockery\Exception;

class GetCurrentSequence
{
    use AsAction;

    public function handle(TypeEnum $type)
    {
        $current = Sequence::where('type', $type)
            ->where('status', StatusEnum::current)
            ->whereDate('due_date', '<=', Carbon::now())
            ->orderByDesc('created_at')
            ->get()
            ->first();

        if (empty($current)) {
            throw new Exception(__('No sequences available'));
        }

        return $current;
    }
}
