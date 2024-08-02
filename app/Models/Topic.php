<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function points()
    {
        return $this->hasMany(Point::class);
    }

    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }

}
