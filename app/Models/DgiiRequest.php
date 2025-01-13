<?php

namespace App\Models;

use App\Enums\DgiiRequest\StatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class DgiiRequest extends Model
{
    use HasLogs, SoftDeletes;

    protected $fillable = [
        'status', 'sequence_number', 'security_code', 'signature_date',
        'signed_xml', 'xml_path', 'request', 'cert_id',
    ];

    protected function casts(): array
    {
        return [
            'status' => StatusEnum::class,
            'request' => 'array',
        ];
    }

    public function cert(): BelongsTo
    {
        return $this->belongsTo(Cert::class);
    }
}
