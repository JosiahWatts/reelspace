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
}
