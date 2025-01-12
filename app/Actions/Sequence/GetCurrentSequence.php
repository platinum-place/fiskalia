<?php

namespace App\Actions\Sequence;

use Carbon\Carbon;
use Mockery\Exception;
use App\Models\Sequence;
use App\Enums\Sequence\TypeEnum;
use App\Enums\Sequence\StatusEnum;
use Lorisleiva\Actions\Concerns\AsAction;

class GetCurrentSequence
{
    use AsAction;

    public function handle(TypeEnum $type)
    {
        $current = Sequence::where('type', $type)
            ->where('status', StatusEnum::current)
            ->whereDate('due_date', '>=', Carbon::now())
            ->orderByDesc('created_at')
            ->get()
            ->first(); 

        if (empty($current)) {
            throw new Exception(__('No sequences available'));
        }

        return $current;
    }
}
