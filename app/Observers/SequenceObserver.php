<?php

namespace App\Observers;

use App\Models\Sequence;
use App\Enums\Sequence\StatusEnum;

class SequenceObserver
{
    /**
     * Handle the Sequence "created" event.
     */
    public function created(Sequence $sequence): void
    {
        if ($sequence->status === StatusEnum::current) {
            $sequence->newQuery()
                ->where('type', $sequence->type)
                ->where('id', '!=', $sequence->id)
                ->update(['status' => StatusEnum::reserve]);
        }
    }

    /**
     * Handle the Sequence "updated" event.
     */
    public function updated(Sequence $sequence): void
    {
        //
    }

    /**
     * Handle the Sequence "deleted" event.
     */
    public function deleted(Sequence $sequence): void
    {
        //
    }

    /**
     * Handle the Sequence "restored" event.
     */
    public function restored(Sequence $sequence): void
    {
        //
    }

    /**
     * Handle the Sequence "force deleted" event.
     */
    public function forceDeleted(Sequence $sequence): void
    {
        //
    }
}
