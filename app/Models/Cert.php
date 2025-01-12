<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cert extends Model
{
    protected $fillable = [
        'due_date', 'path', 'password',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'encrypted',
        ];
    }
}
