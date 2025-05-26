<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cert extends Model
{
    protected $fillable = [
        'cert_path',
        'password',
        'due_date',
    ];

    protected $hidden = [
        'password',
        'cert_path',
    ];

    protected function casts(): array
    {
        return [
            'due_date' => 'date',
            'password' => 'encrypted',
        ];
    }
}
