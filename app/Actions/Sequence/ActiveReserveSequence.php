<?php

namespace App\Actions\Sequence;

use App\Enums\Sequence\StatusEnum;
use App\Enums\Sequence\TypeEnum;
use App\Models\Sequence;
use Lorisleiva\Actions\Concerns\AsAction;

class ActiveReserveSequence
{
    use AsAction;

    public function handle(TypeEnum $type)
    {
        $reserve = Sequence::where('type', $type)
            ->where('status', StatusEnum::RESERVE)
            ->orderByDesc('created_at')
            ->get()
            ->first();

        if (! empty($reserve)) {
            $reserve->update(['status' => StatusEnum::CURRENT]);
        }
    }
}
