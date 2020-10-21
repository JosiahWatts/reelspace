<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = [];

    public function spaces()
    {
        return $this->belongsToMany(Space::class, 'movie_space_user', 'movie_id', 'space_id');
    }

    public function owner()
    {
        return $this->belongsToMany(User::class, 'movie_space_user', 'user_id');
    }

    // TODO: Add Relationship to Spaces (Add to Space/Remove from Space)
    // See Space Model
}
