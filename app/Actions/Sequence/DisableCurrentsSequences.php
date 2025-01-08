<?php

namespace App\Actions\Sequence;

use App\Enums\Sequence\StatusEnum;
use App\Models\Sequence;
use Carbon\Carbon;
use Lorisleiva\Actions\Concerns\AsAction;

class DisableCurrentsSequences
{
    use AsAction;

    public function handle()
    {
        Sequence::whereDate('due_date', '<', Carbon::now())
            ->where('status', StatusEnum::CURRENT)
            ->get()
            ->each(function ($current) {
                $current->update(['status' => StatusEnum::DISABLED]);

                ActiveReserveSequence::run($current->type);
            });
    }
}
