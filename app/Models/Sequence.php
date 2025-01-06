<?php

namespace App\Models;

use App\Enums\Sequence\StatusEnum;
use App\Enums\Sequence\TypeEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sequence extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'range_start', 'range_end', 'current_number',
        'status', 'type', 'series', 'length', 'due_date',
    ];

    protected function casts(): array
    {
        return [
            'type' => TypeEnum::class,
            'status' => StatusEnum::class,
        ];
    }
}
