<?php

namespace App\Models;

use App\Enums\DgiiRequest\StatusEnum;
use App\Enums\DgiiRequest\TypeEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DgiiRequest extends Model
{
    use HasLogs, SoftDeletes;

    protected $fillable = [
        'status', 'type', 'sequence_number', 'security_code', 'signature_date',
        'signed_xml', 'xml_path', 'request',
    ];

    protected function casts(): array
    {
        return [
            'status' => StatusEnum::class,
            'type' => TypeEnum::class,
            'request' => 'array',
        ];
    }

    protected $hidden = [
        'request',
    ];
}
