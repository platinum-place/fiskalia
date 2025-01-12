<?php

namespace App\Models;

use App\Enums\DgiiTransaction\StatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class DgiiTransaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'status', 'sequence_number', 'security_code', 'signature_date',
        'signed_xml', 'xml_path', 'dgii_request', 'cert_id'
    ];

    protected function casts(): array
    {
        return [
            'status' => StatusEnum::class,
            'dgii_request' => 'array',
        ];
    }

    public function cert(): belongsTo
    {
        return $this->belongsTo(Cert::class);
    }
}
