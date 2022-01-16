<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_name', 'view', 'isi', 'slug',
    ];

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'course_status')->withPivot('progress')
        ->wherePivot('progress', true);
    }
}
