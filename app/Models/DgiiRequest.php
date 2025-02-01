<?php

namespace App\Models;

use App\Enums\DgiiRequest\StatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DgiiRequest extends Model
{
    use HasLogs, SoftDeletes;

    protected $fillable = [
        'status', 'signed_xml', 'xml_path', 'request', 'response', 'user_id',
    ];

    protected function casts(): array
    {
        return [
            'status' => StatusEnum::class,
            'request' => 'array',
            'response' => 'array',
        ];
    }

    protected $hidden = [
        'request', 'signed_xml', 'xml_path',
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
