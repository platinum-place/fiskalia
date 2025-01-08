<?php

namespace App\Models;

use App\Enums\Sequence\StatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DgiiTransaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'status',
    ];

    protected function casts(): array
    {
        return [
            'status' => StatusEnum::class,
        ];
    }
}
