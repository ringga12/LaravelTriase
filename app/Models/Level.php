<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = [
        'xp', 'level', 'perfect_man', 'top_global',
    ];
}
