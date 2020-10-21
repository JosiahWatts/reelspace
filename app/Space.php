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

    public function addMovie(Movie $movie)
    {
        return $this->movies()->save($movie, ['user_id' => auth()->user()->id]);
    }

    public function removeMovie(Movie $movie)
    {
        return $this->movies()->detach($movie);
    }
}
