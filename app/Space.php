<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Space extends Model
{
    use Joinable;

    protected $guarded = [];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function members()
    {
        return $this->belongsToMany(User::class);
    }

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_space_user', 'space_id', 'movie_id');
    }

    // Activity Feed
    // public function activity() {}
}
