<?php

namespace App\Models;

trait HasLogs
{
    public function logs(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Log::class, 'loggable');
    }
}
