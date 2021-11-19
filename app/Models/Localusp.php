<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localusp extends Model
{
    use HasFactory;

    protected $fillable = [
        'codlocusp',
    ];

    protected $casts = [
        'replicado' => 'array',
    ];

}
