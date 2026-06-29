<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    protected $table = 'acteurs';

    protected $fillable = [
        'name',
        'logo',
        'siteweb',
    ];

    protected $casts = [
        'id' => 'integer',
    ];
}