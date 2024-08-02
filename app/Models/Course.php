<?php

namespace App\Models;

class Course extends BaseModel
{

    public function topics()
    {
        return $this->belongsToMany(Topic::class);
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
