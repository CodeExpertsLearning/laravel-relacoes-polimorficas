<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['embed'];

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
